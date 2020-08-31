<div x-data="{ open: false }" @keydown.window.escape="open = false" @click.away="open = false"
     class="relative inline-block text-left z-40">
    <div>
        <span class="rounded-md shadow-sm">
            <button @click="open = !open" type="button"
                    class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150">
                {{ auth()->user()->currentTeam()->name }}
                <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd"/>
                </svg>
            </button>
        </span>
    </div>
    <div x-show="open" x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg">
        <div class="rounded-md bg-white shadow-xs">
            <div class="py-1">
                @foreach($teams as $team)
                    @if($team->id == auth()->user()->current_team->id)
                        <div
                            class="flex items-center block px-4 py-2 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                            <span class="mr-2 text-green-400">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="check-circle w-6 h-6"><path
                                        fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <a class="text-sm leading-5 text-gray-700">{{ $team->name }}</a>
                        </div>
                    @else
                        <div
                            wire:click="switchTeam('{{ $team->id }}')"
                            class="flex items-center cursor-pointer block px-4 py-2 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">
                            <span class="mr-2 text-gray-400">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="user-group w-6 h-6"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                            </span>
                            <a class="text-sm leading-5 text-gray-700">{{ $team->name }}</a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="border-t border-gray-100"></div>
            <div class="py-1">
                <a href="#"
                   class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">Add
                                                                                                                                                                          New
                                                                                                                                                                          Team</a>
            </div>
        </div>
    </div>
</div>
