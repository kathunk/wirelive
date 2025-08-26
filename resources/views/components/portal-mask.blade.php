@props([
    'fun' => false
])

<svg width="0" height="0" class="absolute">
    <defs>
        <mask id="portalMask">
            <rect width="100%" height="100%" fill="black" />
            <rect id="portalShape" x="566" y="158" width="835" height="431" fill="white" />
        </mask>
    </defs>
</svg>

<div class="portal-controls" id="portalControls">
    <div class="portal-frame" id="portalFrame">
        <div class="resize-handle-wrapper nw" data-handle="nw">
            <div class="resize-handle"></div>
        </div>
        <div class="resize-handle-wrapper ne" data-handle="ne">
            <div class="resize-handle"></div>
        </div>
        <div class="resize-handle-wrapper sw" data-handle="sw">
            <div class="resize-handle"></div>
        </div>
        <div class="resize-handle-wrapper se" data-handle="se">
            <div class="resize-handle"></div>
        </div>
    </div>
</div>

<script>
    // --- Config -----------------------------------------------------------------
    const REFS = [{
        width: 1485,
        rect: { x: 566, y: 158, w: 835, h: 431 },
    }, {
        width: 1037,
        rect: { x: 364, y: 172, w: 542, h: 252 },
    }, {
        width: 430,
        rect: { x: 138, y: 60, w: 262, h: 235 },
    }, {
        width: 390,
        rect: { x: 138, y: 60, w: 237, h: 220 },
    }];
    const REF = REFS.find(r => window.innerWidth > r.width) ?? REFS[REFS.length - 1];
    const LIMITS = { minW: 60, minH: 45 };
    const DOM = {
        portalShape: document.getElementById("portalShape"),
        portalControls: document.getElementById("portalControls"),
        portalFrame: document.getElementById("portalFrame"),
        portalInfo: document.getElementById("portalInfo"),
        resizeHandles: document.querySelectorAll(".resize-handle-wrapper"),
    };

    // --- Utils ------------------------------------------------------------------
    const ratios = {
        x: REF.rect.x / REF.width,
        y: REF.rect.y / REF.width,
        w: REF.rect.w / REF.width,
        h: REF.rect.h / REF.width,
    };

    const clamp = (v, lo, hi) => Math.max(lo, Math.min(hi, v));

    function clampRect(rect) {
        const vw = window.innerWidth;
        const vh = Math.max(
            document.documentElement.clientHeight,
            document.body.clientHeight,
            window.innerHeight || 0
        );
        const w = clamp(rect.w, LIMITS.minW, vw);
        const h = clamp(rect.h, LIMITS.minH, vh);
        const x = clamp(rect.x, 0, vw - w);
        const y = clamp(rect.y, 0, vh - h);
        return { x, y, w, h };
    }

    function scaleRectFromWidth(width) {
        return {
            x: ratios.x * width,
            y: ratios.y * width,
            w: ratios.w * width,
            h: ratios.h * width,
        };
    }

    function applyHandleResize(handle, start, dx, dy) {
        // start: {x,y,w,h}
        let { x, y, w, h } = start;
        switch (handle) {
            case "nw":
                return { x: x + dx, y: y + dy, w: w - dx, h: h - dy };
            case "ne":
                return { x, y: y + dy, w: w + dx, h: h - dy };
            case "sw":
                return { x: x + dx, y, w: w - dx, h: h + dy };
            case "se":
                return { x, y, w: w + dx, h: h + dy };
            default:
                return start;
        }
    }

    // --- State ------------------------------------------------------------------
    let state = (() => {
        const vw = Math.min(window.innerWidth, 1512);
        const diff = window.innerWidth - 1512;
        const r = scaleRectFromWidth(vw);
        if (diff > 0) {
            r.x += diff / 2;
        }
        console.log(r);
        return {
            rect: r,                 // {x,y,w,h}
            mode: "idle",            // "idle" | "drag" | "resize"
            handle: null,            // "nw" | "ne" | "sw" | "se" | null
            startPointer: { x: 0, y: 0 },
            startRect: r,
            lastViewportWidth: vw,   // helps scale on resize
            dirty: true,
        };
    })();

    function update(patch) {
        state = { ...state, ...patch };
        scheduleRender();
    }

    // --- Rendering --------------------------------------------------------------
    let rafId = null;
    function scheduleRender() {
        if (state.dirty) return; // already scheduled
        state.dirty = true;
        rafId = requestAnimationFrame(render);
    }

    function render() {
        if (!state.dirty) return;
        state.dirty = false;

        const rect = clampRect(state.rect);

        // Keep clamped result in state so math stays consistent
        if (
            rect.x !== state.rect.x ||
            rect.y !== state.rect.y ||
            rect.w !== state.rect.w ||
            rect.h !== state.rect.h
        ) {
            state = { ...state, rect };
        }

        // SVG mask - adjust for scroll offset to keep mask aligned with fixed controls
        const scrollY = window.scrollY || 0;
        DOM.portalShape.setAttribute("x", rect.x);
        DOM.portalShape.setAttribute("y", rect.y + scrollY);
        DOM.portalShape.setAttribute("width", rect.w);
        DOM.portalShape.setAttribute("height", rect.h);

        // Visual frame/controls
        const style = DOM.portalControls.style;
        style.left = rect.x + "px";
        style.top = (rect.y + scrollY) + "px";

        DOM.portalFrame.style.width = rect.w - 1 + "px";
        DOM.portalFrame.style.height = rect.h - 1 + "px";

        // Ensure handles visible
        DOM.resizeHandles.forEach(h => (h.style.display = "block"));
    }

    // --- Pointer Logic ----------------------------------------------------------
    function onPointerDown(e) {
        // If a resize handle, start resize; otherwise drag
        const handleEl = e.target.closest(".resize-handle-wrapper");
        const handle = handleEl ? handleEl.dataset.handle : null;

        const rect = state.rect;
        update({
            mode: handle ? "resize" : "drag",
            handle,
            startPointer: { x: e.clientX, y: e.clientY },
            startRect: rect,
        });

        DOM.portalControls.setPointerCapture?.(e.pointerId);
        document.body.style.userSelect = "none";
        DOM.portalFrame.style.cursor = handle ? "nwse-resize" : "grabbing";
        e.preventDefault();
    }

    function onPointerMove(e) {
        if (state.mode === "idle") return;

        const dx = e.clientX - state.startPointer.x;
        const dy = e.clientY - state.startPointer.y;

        if (state.mode === "drag") {
            const next = {
                x: state.startRect.x + dx,
                y: state.startRect.y + dy,
                w: state.startRect.w,
                h: state.startRect.h,
            };
            update({ rect: next });
        } else if (state.mode === "resize") {
            const resized = applyHandleResize(state.handle, state.startRect, dx, dy);

            // Enforce min constraints while resizing from edges
            const w = Math.max(resized.w, LIMITS.minW);
            const h = Math.max(resized.h, LIMITS.minH);
            let x = resized.x;
            let y = resized.y;

            // If clamped width/height changed, adjust anchored edge so the “fixed corner” stays put
            if (w !== resized.w) {
                if (state.handle === "nw" || state.handle === "sw") {
                    x = state.startRect.x + (state.startRect.w - w);
                }
            }
            if (h !== resized.h) {
                if (state.handle === "nw" || state.handle === "ne") {
                    y = state.startRect.y + (state.startRect.h - h);
                }
            }

            update({ rect: { x, y, w, h } });
        }

        e.preventDefault();
    }

    function endInteraction() {
        if (state.mode === "idle") return;
        update({ mode: "idle", handle: null });
        DOM.portalFrame.style.cursor = "move";
        document.body.style.userSelect = "";
    }

    DOM.portalControls.addEventListener("pointerdown", onPointerDown);
    window.addEventListener("pointermove", onPointerMove, { passive: false });
    window.addEventListener("pointerup", endInteraction);
    window.addEventListener("pointercancel", endInteraction);

    // --- Resize behavior --------------------------------------------------------
    let resizeDebounce = 0;
    window.addEventListener("resize", () => {
        clearTimeout(resizeDebounce);
        resizeDebounce = setTimeout(() => {
            const prev = state.lastViewportWidth || 1;
            const next = window.innerWidth || prev;
            const factor = next / prev;

            // Scale current rect proportionally to viewport width change
            const r = state.rect;
            const scaled = { x: r.x * factor, y: r.y * factor, w: r.w * factor, h: r.h * factor };

            update({ rect: scaled, lastViewportWidth: next });
        }, 100);
    });

    // --- Scroll behavior --------------------------------------------------------
    window.addEventListener("scroll", () => {
        const scrollY = window.scrollY || 0;
        DOM.portalShape.setAttribute("y", state.rect.y + scrollY);
        DOM.portalControls.style.top = (state.rect.y + scrollY) + "px";
    });

    // --- Init -------------------------------------------------------------------
    render();

    // --- Mobile niceties --------------------------------------------------------
    document.addEventListener("contextmenu", (e) => {
        if (state.mode !== "idle") e.preventDefault();
    }, { passive: false });

    // Prevent page scroll while manipulating the portal on touch
    DOM.portalControls.addEventListener("touchmove", (e) => e.preventDefault(), { passive: false });

</script>
