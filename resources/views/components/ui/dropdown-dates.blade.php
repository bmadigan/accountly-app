<div>
    <x-ui.dropdown alignment="right">
        <x-slot name="trigger">

            <span class="inline-flex rounded-md shadow-sm">
                <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-cool-gray-600 hover:bg-cool-gray-500 focus:outline-none focus:border-cool-gray-700 focus:shadow-outline-cool-gray active:bg-cool-gray-700 transition ease-in-out duration-150">
                    This Month (May)
                    <svg class="ml-2 -mr-0.5 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </span>
        </x-slot>

        <x-ui.dropdown-link href="/">Today</x-ui.dropdown-link>
        <x-ui.dropdown-link href="/">Yesterday</x-ui.dropdown-link>
        <x-ui.dropdown-link href="/">This Month(May)</x-ui.dropdown-link>
    </x-ui.dropdown>
</div>
