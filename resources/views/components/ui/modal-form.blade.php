@props([
'title' => '',
])
<div x-data="{ open: false }" x-cloak>

    {{ $trigger }}

    <div class="fixed bottom-0 inset-x-0 px-4 pb-6 sm:inset-0 sm:p-0 sm:flex sm:items-center sm:justify-center"
         x-show="open">

        <div class="fixed inset-0 transition-opacity" x-show="open" x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div
            class="bg-white rounded-lg px-4 pt-5 pb-4 overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full sm:p-6"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline" x-show="open"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <div>
                <div class="mt-1 sm:mt-2">
                    <h3 class="text-lg sm:text-2xl leading-6 font-medium text-gray-900" id="modal-headline">
                        {{ $title }}
                    </h3>
                    <div class="mt-2 sm:mt-6">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
