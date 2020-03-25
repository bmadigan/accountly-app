<ul>
    @foreach($messages as $message)
    <li>
        <a href="{{ route('messages.show', $message->uuid) }}" class="
                    @if (!$message->first)
                    border-t border-gray-200
                    @endif
                    block hover:bg-gray-50 focus:outline-none focus:bg-gray-50 transition duration-150 ease-in-out">
            <div class="flex items-center px-4 py-4 sm:px-6">
                <div class="min-w-0 flex-1 flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full" src="{{ $message->owner->photo_url }}" />
                    </div>
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                        <div>
                            <div class="text-sm leading-5 font-medium text-indigo-600 truncate">
                                {{ $message->title }}
                            </div>
                            <div class="mt-2 flex items-center text-xs leading-5 text-gray-500">
                                <time
                                    datetime="{{ dateShortFormat($message->created_at) }}">{{ dateTimeHuman($message->created_at) }}</time>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div>
                                <div class="text-sm leading-5 text-gray-900">
                                    {{ $message->owner->name }}
                                </div>
                                <div class="mt-2 flex items-center">
                                    <span
                                        class="ml-auto inline-block py-0.5 text-green-700 px-3 text-xs leading-4 rounded-full bg-green-100">
                                        19
                                    </span>
                                    <span class="text-xs text-gray-500 ml-1">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mr-6">
                    <div class="flex relative z-0 overflow-hidden">
                        <img class="relative z-30 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                            src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" />
                        <img class="relative z-20 -ml-1 inline-block h-6 w-6 rounded-full text-white shadow-solid"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" />
                    </div>
                </div>
                <div>
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </a>
    </li>
    @endforeach
</ul>
