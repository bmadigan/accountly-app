@extends('layouts.app')

@section('page_title') Messages @endsection

@section('content')

<x-page-header page="Messages" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        <div>
            <div class="sm:hidden">
                <select class="form-select block w-full">
                    <option>Unread Messages</option>
                    <option>Read Messages</option>
                </select>
            </div>
            <div class="hidden sm:block">
                <nav class="flex ml-2">
                    <a href="#"
                        class="rounded-t-md bg-gray-200 px-3 py-2 font-medium text-sm leading-5 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 focus:bg-gray-200">
                        Unread Messages
                    </a>
                    <a href="#"
                        class="ml-4 px-3 py-2 font-medium text-sm leading-5 rounded-t-md text-gray-800 focus:outline-none focus:bg-gray-300">
                        Read Messages
                    </a>
                </nav>
            </div>
        </div>

        <livewire:messages.index>


    </div>
</main>

@endsection
