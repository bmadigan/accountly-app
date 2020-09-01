<div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden">
    <div class="px-2 pt-2 pb-3">
        <a href="{{ route('home') }}"
           class="{{ (request()->is('home')) ? 'bg-slate-800' : '' }}
           block px-3 py-2 rounded-md text-base font-medium text-white bg-slate-900 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Dashboard</a>
        <a href="{{ route('messages.index') }}"
           class="{{ (request()->is('messages*')) ? 'bg-slate-800' : '' }}
           mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Messages</a>
        <a href="{{ route('documents.index') }}"
           class="{{ (request()->is('documents*')) ? 'bg-slate-800' : '' }}
           mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Documents</a>
        <a href="{{ route('integrations.index') }}"
           class="{{ (request()->is('intagrations*')) ? 'bg-slate-800' : '' }}
               mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Integrations</a>
    </div>
    <div class="pt-4 pb-3 border-t border-slate-700">
        <div class="flex items-center px-5">
            <div class="ml-3">
                <div class="text-base font-medium leading-6 text-white">{{ auth()->user()->name }}</div>
            </div>
        </div>
        <div class="mt-3 px-2">
            <a href="{{ route('logout') }}"
               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-400 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out"
               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Log out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
        </div>
    </div>
</div>
