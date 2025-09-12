@props(['title', 'time', 'fun' => false])

@php
    $textColor = $fun ? 'text-fossil' : 'text-night-rider';
@endphp

<div class="flex items-center justify-between gap-x-4 px-6 py-4">
  <div class="uppercase text-base xs:text-lg {{ strlen($title) > 30 ? 'w-2/3' : '' }} {{ $textColor }}">{{ $title }}</div>
  <div class="text-base xs:text-lg font-medium font-mono text-right xs:text-start xs:w-auto w-1/3 {{ $textColor }}">
    <span class="xs:text-nowrap">{{ $time }}</span>
  </div>
</div>

<x-icons.svg.dashed-lines class="w-full h-4 {{ $textColor }}" />
