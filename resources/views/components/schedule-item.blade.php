@props([
    'title' => null,
    'subtitle' => null,
    'speaker' => null,
    'time',
    'fun' => false
])

@php
    $textColor = $fun ? 'text-fossil' : 'text-night-rider';

    if($speaker) {
        $speakerTextColor = $fun ? 'text-fossil/70' : 'text-night-rider/70';
    }
@endphp

<div class="flex flex-col gap-y-2 sm:flex-row sm:items-center justify-between gap-x-4 px-6 py-4">
    <div class="uppercase text-sm xs:text-base {{ $textColor }}">
        <span class="pr-2.5 text-balance">
            {{ $title }}

            @if($subtitle)
                <br><span>{{ $subtitle }}</span>
            @endif
        </span>

        @if($speaker)
            <div class="block pt-2 min-[1056px]:pt-0 min-[1056px]:hidden"></div>
            <span class="{{ $speakerTextColor }} text-nowrap">{{ $speaker }}</span>
        @endif
    </div>

  <div class="text-xs xs:text-sm font-medium font-mono text-start w-auto {{ $textColor }}">
    <span class="xs:text-nowrap">{{ $time }}</span>
  </div>
</div>

<x-icons.svg.dashed-lines class="w-full h-4 {{ $textColor }}" />
