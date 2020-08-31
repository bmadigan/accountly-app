<ul>
    @forelse($messages as $message)
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
                            <div class="text-sm leading-5 font-medium font-semibold truncate">
                                {{ $message->title }}
                            </div>
                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500">
                                {{ $message->owner->name }} -
                                <time class="ml-2"
                                    datetime="{{ dateShortFormat($message->created_at) }}">{{ dateTimeHuman($message->created_at) }}</time>
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div>
                                <div class="text-sm leading-5 text-gray-900">
                                    <span
                                        class="ml-auto inline-block py-0.5 text-green-700 px-3 text-sm leading-4 rounded-full bg-green-100">
                                        {{ $message->comment_count }}
                                    </span>
                                    <span
                                        class="text-xs text-gray-500">{{ strPlural('comment', $message->comment_count) }}</span>
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
    @empty
        <li class="border-t border-gray-200 py-3 px-4 text-center">
            <h2 class="mt-8 text-2xl text-cool-gray-600 font-bold">
                You do not have any messages for this team!
            </h2>
            <div class="w-full mt-8 p-12 bg-cool-gray-50 rounded-lg">
                <a href="{{ route('messages.create') }}" class="btn btn-primary -mt-2 mr-1">
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 mr-1"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                    Create Your First Message!
                </a>
            </div>
        </li>
    @endforelse
</ul>
