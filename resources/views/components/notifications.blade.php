<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false" class="relative inline-block text-left">
    <div>
      <span class="rounded-md shadow-sm inline-block relative">
        <button @click="open = !open" type="button"
        class="flex-shrink-0 p-1 border-2 border-transparent text-slate-400 rounded-full hover:text-white focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            @if($notifications->count() > 0)
                <span class="absolute top-1 right-2 block h-2 w-2 rounded-full text-white shadow-solid bg-red-500"></span>
            @endif
        </button>
      </span>
    </div>
    @if($notifications->count() > 0)
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-64 rounded-md shadow-lg">
        <div class="rounded-md bg-white shadow-xs">
            @foreach($notifications as $notify)
                <div class="px-2 py-2">
                    @if($notify->type === 'App\Notifications\NotifySubscribers')
                        <span class="text-xs leading-5 font-medium text-gray-900">
                            {{ $notify->data['comment_by']}}
                        </span>
                        <span class="ml-1 text-xs text-gray-500">
                            replied to a message
                        </span>
                    @endif
                    <div class="text-xs text-gray-400">
                        {{ dateTimeHuman($notify->created_at) }}
                    </div>
                </div>
                <div class="border-t border-gray-100"></div>
            @endforeach

            <div class="border-t border-gray-100"></div>
            <div class="p-0">
                <a href="#" class="block px-4 py-2 text-xs uppercase leading-5 text-green-400 bg-green-50 hover:bg-green-100 hover:text-green-500 focus:outline-none text-center">View All</a>
            </div>
            <div class="border-t border-gray-100"></div>
        </div>
        </div>
    @endif
  </div>