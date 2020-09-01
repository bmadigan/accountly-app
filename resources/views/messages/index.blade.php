<x-layouts.app>

@section('page_title') Messages @endsection

<x-ui.page-header page="Messages" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        <div x-data="{ currentTab: 'unread' }">
            <div>
                <div class="sm:hidden">
                    <select class="form-select block w-full">
                        <option>Unread Messages</option>
                        <option>Read Messages</option>
                        <option>Archived Messages</option>
                    </select>
                </div>
                <div class="flex">

                    <div class="flex-1 hidden sm:block content-end">
                        <nav class="flex ml-2">
                            <button @click="currentTab = 'unread'" :class="{ 'tab-active': currentTab === 'unread' }"
                                class="tab">
                                Unread Messages
                            </button>
                            <button @click="currentTab = 'read'" :class="{ 'tab-active': currentTab === 'read' }"
                                class="tab">
                                Read Messages
                            </button>
                            <button @click="currentTab = 'archived'"
                                :class="{ 'tab-active': currentTab === 'archived' }" class="tab">
                                Archived Messages
                            </button>
                        </nav>
                    </div>

                    <div>
                        @include('messages._modal-add-message')
                    </div>
                </div>
            </div>

            <div class="card" x-show="currentTab === 'unread'">
                @livewire('messages.messages-listing', ['messages' => $messages])
            </div>

            <div class="card" x-show="currentTab === 'read'">
                <div class="border-t border-gray-200 py-12 text-center">
                    This tab has not yet been implemented.
                </div>
            </div>

            <div class="card" x-show="currentTab === 'archived'">
                <div class="border-t border-gray-200 py-12 text-center">
                    This tab has not yet been implemented.
                </div>
            </div>
        </div>

    </div>
</main>

</x-layouts.app>
