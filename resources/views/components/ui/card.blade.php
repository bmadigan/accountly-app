@props([
'title' => false,
'footer' => false
])
<div {{ $attributes->merge(['class' => 'card']) }}>
    <div {{ $attributes }} class="
        {{ ($title || $footer) ? 'p-0' : 'px-4 py-5 sm:p-6' }}">

        @if($title)
            <div class="border-b border-gray-200 px-4 py-5 sm:px-6">
                {{ $title }}
            </div>
        @endif

        @if($title || $footer)
            <div class="px-4 py-5 sm:p-6">
        @endif

                {{ $slot }}

        @if($title || $footer)
            </div>
        @endif

        @if($footer)
            <div class="bg-gray-50 px-4 py-4 sm:px-6">
                {{ $footer }}
            </div>
        @endif
    </div>
</div>
