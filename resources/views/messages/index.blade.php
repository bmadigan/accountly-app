@extends('layouts.app')

@section('page_title') Messages @endsection

@section('content')

<x-page-header page="Messages" />

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
                        <a href="{{ route('messages.create') }}" class="btn btn-secondary -mt-2 mr-1">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 mr-1"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                            New Message
                        </a>
                    </div>
                </div>
            </div>

            <div class="card" x-show="currentTab === 'unread'">
                @livewire('messages.messages-listing', ['messages' => $messages])
            </div>

            <div class="card" x-show="currentTab === 'read'">
                <h4>Im the read messages</h4>
            </div>

            <div class="card" x-show="currentTab === 'archived'">
                <h4>Im the archvied messages</h4>
            </div>
        </div>

    </div>
</main>

@endsection
