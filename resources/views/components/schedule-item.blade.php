@props(['title', 'time'])

<div class="flex items-center justify-between gap-x-4 px-6 py-4">
  <div class="text-base xs:text-lg {{ strlen($title) > 30 ? 'w-2/3' : '' }}">{{ $title }}</div>
  <div class="text-base xs:text-lg font-medium font-mono text-right xs:text-start xs:w-auto w-1/3">
    <span class="xs:text-nowrap">{{ $time }}</span>
  </div>
</div>

<x-icons.svg.dashed-lines class="w-full h-4" />
