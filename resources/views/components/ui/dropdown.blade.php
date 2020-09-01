@props([
'width' => 'w-40',
'alignment' => 'left'
])

@php
    $alignmentClasses = [
    'left' => 'left-0',
    'right' => 'right-0'
    ];
@endphp

<div {{ $attributes->merge(['class' => 'relative']) }} x-data="{ open: false }" @click.away="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div x-show="open"
         class="absolute {{ $alignmentClasses[$alignment] }} z-30 bg-white rounded-md shadow-md py-2 mt-1 {{ $width }}"
         x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition transform duration-300"
         x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        {{ $slot }}
    </div>
</div>
