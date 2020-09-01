<div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
        <div class="flex items-center px-2 lg:px-0">
            <div class="flex-shrink-0">
                <img class="block lg:hidden h-8 w-auto" src="/svgs/logo-full-white.svg" alt=""/>
                <img class="hidden lg:block h-8 w-auto" src="/svgs/logo-full-white.svg" alt=""/>
            </div>
            <div class="hidden lg:block lg:ml-6">
                <div class="flex">
                    <a href="{{ route('home') }}"
                       class="{{ (request()->is('home')) ? 'bg-slate-800' : '' }}
                           px-3 py-2 rounded-md text-sm leading-5 font-medium text-slate-100 hover:text-slate-100 hover:bg-slate-600 focus:outline-none focus:text-slate-100 focus:bg-slate-600 transition duration-150 ease-in-out">Dashboard</a>
                    <a href="{{ route('messages.index') }}"
                       class="{{ (request()->is('messages*')) ? 'bg-slate-800' : '' }}
                           ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-slate-100 hover:text-slate-100 hover:bg-slate-600 focus:outline-none focus:text-slate-100 focus:bg-slate-600 transition duration-150 ease-in-out">Messages</a>
                    <a href="{{ route('documents.index') }}"
                       class="{{ (request()->is('documents*')) ? 'bg-slate-800' : '' }}
                           ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-slate-100 hover:text-slate-100 hover:bg-slate-600 focus:outline-none focus:text-slate-100 focus:bg-slate-600 transition duration-150 ease-in-out">Documents</a>
                    <a href="{{ route('integrations.index') }}"
                       class="{{ (request()->is('intagrations*')) ? 'bg-slate-800' : '' }}
                           ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-slate-100 hover:text-slate-100 hover:bg-slate-600 focus:outline-none focus:text-slate-100 focus:bg-slate-600 transition duration-150 ease-in-out">Integrations</a>
                </div>
            </div>
        </div>
        <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end">
            <div class="max-w-lg w-full lg:max-w-xs">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <input id="search"
                           class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-slate-100 placeholder-slate-400 focus:outline-none focus:bg-white sm:text-sm transition duration-150 ease-in-out"
                           placeholder="Search"/>
                </div>
            </div>
        </div>
        <div class="flex lg:hidden">
            <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-white hover:bg-slate-700 focus:outline-none focus:bg-slate-700 focus:text-white transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex"
                          stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                    <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div class="hidden z-50 lg:block lg:ml-4">
            <div class="flex items-center">

                @livewire('shared.notifications')

                <div @click.away="open = false" class="ml-4 relative flex-shrink-0" x-data="{ open: false }">
                    <div>
                        <button @click="open = !open"
                                class="flex text-sm rounded-full text-white focus:outline-none focus:shadow-solid transition duration-150 ease-in-out">
                            <img class="h-8 w-8 rounded-full border border-white"
                                 src="{{ auth()->user()->photo_url }}"/>
                        </button>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                        <div class="py-1 rounded-md bg-white shadow-xs">
                            <a href="#"
                               class="block px-4 py-2 text-sm leading-5 text-slate-700 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 transition duration-150 ease-in-out">Your
                                                                                                                                                                                     Profile</a>
                            <a href="#"
                               class="block px-4 py-2 text-sm leading-5 text-slate-700 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 transition duration-150 ease-in-out">Settings</a>
                            <a href="{{ route('logout') }}"
                               class="block px-4 py-2 text-sm leading-5 text-slate-700 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 transition duration-150 ease-in-out"
                               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
