<!-- Responsive poster box -->
<div class="relative isolate mx-auto w-full max-w-[1200px] aspect-[1296/532] overflow-hidden">

  <!-- 2) Base 'wire' image (no blending) -->
  <img src="/img/fun-wires.png"
       alt=""
       class="absolute right-[6%] top-[8%] w-[56%] h-auto object-cover pointer-events-none">

  <!-- 3) Color overlay that tints what's beneath (incl. the text) -->
  <img src="/img/fun-colors.png"
       alt=""
       class="absolute right-[6%] top-[8%] w-[56%] h-auto object-cover mix-blend-exclusion pointer-events-none">

  <!-- 4) The big headline (ONE copy only) -->
  <div class="absolute inset-y-0 left-[3%] flex items-center">
    <h1 class="font-black leading-[0.85] tracking-tight text-white
               text-[clamp(40px,9vw,180px)]">
      A CHILL & AWESOME<br>
      LIVEWIRE COMMUNITY EVENT
    </h1>
  </div>

  <!-- (Optional) small meta text -->
  <div class="absolute left-[3%] top-[6%] text-white/80 text-sm md:text-base">
    BUFFALO, NY • OCTOBER 28–29, 2025
  </div>
</div>
