@props(['title', 'time'])

<div class="flex items-center justify-between gap-x-4 px-6 py-4">
  <div class="text-lg {{ strlen($title) > 30 ? 'w-2/3' : '' }}">{{ $title }}</div>
  <div class="text-lg font-medium font-mono">
    <span class="text-nowrap">{{ $time }}</span>
  </div>
</div>

<x-icons.svg.dashed-lines class="w-full h-4" />
