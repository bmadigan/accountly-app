<div :class="{'block': open, 'hidden': !open}" class="hidden lg:hidden">
    <div class="px-2 pt-2 pb-3">
        <a href="#"
           class="block px-3 py-2 rounded-md text-base font-medium text-white bg-slate-900 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Dashboard</a>
        <a href="#"
           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Projects</a>
        <a href="#"
           class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-300 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Calendar</a>
    </div>
    <div class="pt-4 pb-3 border-t border-slate-700">
        <div class="flex items-center px-5">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full"
                     src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                     alt=""/>
            </div>
            <div class="ml-3">
                <div class="text-base font-medium leading-6 text-white">Tom Cook</div>
                <div class="text-sm font-medium leading-5 text-slate-400">tom@example.com</div>
            </div>
        </div>
        <div class="mt-3 px-2">
            <a href="#"
               class="block px-3 py-2 rounded-md text-base font-medium text-slate-400 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Your
                                                                                                                                                                                                                      Profile</a>
            <a href="#"
               class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-slate-400 hover:text-white hover:bg-slate-700 focus:outline-none focus:text-white focus:bg-slate-700 transition duration-150 ease-in-out">Settings</a>
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
