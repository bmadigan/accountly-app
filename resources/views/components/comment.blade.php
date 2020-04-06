<div class="mt-4 bg-slate-100 rounded px-4 py-5 border-b border-slate-200 sm:px-6">
    <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
        <div class="ml-4 mt-4">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12 rounded-full" src="{{ $comment->owner->photo_url }}" alt="" />
                </div>
                <div class="ml-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        {{ $comment->owner->name }}
                    </h3>
                    <p class="text-sm leading-5 text-gray-500">
                        Account Manager
                    </p>
                </div>
            </div>
        </div>
        <div class="ml-4 mt-4 text-sm text-gray-500 flex-shrink-0 flex">
            {{ dateLongFormat($comment->updated_at) }}
            @if ($comment->isOwner())
                <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                class="ml-6 relative">
                <div>
                    <button @click="open = !open"
                        class="flex items-center text-gray-400 hover:text-gray-600">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                            </path>
                        </svg>
                    </button>
                </div>
                <div x-show="open" style="display: none;"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="origin-top-right absolute right-0 mt-2 w-56 min-w-max-content rounded-md shadow-lg">
                    <div class="rounded-md bg-white shadow-xs z-50 overflow-auto">
                        <div class="border-t border-gray-100"></div>
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Comment</a>
                        </div>
                        <div class="border-t border-gray-100"></div>
                        <div class="py-1">
                            <a href="#"
                                class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100">Delete Comment</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="mt-3 border-t border-slate-200 pt-3 text-sm text-gray-600">
        {{ $comment->body }}
    </div>
</div>
