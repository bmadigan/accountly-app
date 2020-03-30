@extends('layouts.app')

@section('page_title') Message @endsection

@section('content')

<x-page-header :page="$message->title" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        <div class="md:flex">

            <div class="md:w-4/6 md:mr-4 md:mb-0 mb-2 w-full">
                <div class="card">
                    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
                        <div class="-ml-4 -mt-4 flex justify-between items-center flex-wrap sm:flex-no-wrap">
                            <div class="ml-4 mt-4">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-12 w-12 rounded-full" src="{{ $message->owner->photo_url }}" />
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            {{ $message->owner->name }}
                                        </h3>
                                        <p class="text-sm leading-5 text-gray-500">
                                            Account Manager
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 mt-4 flex-shrink-0 flex">
                                <div x-data="{ open: false }" @keydown.escape="open = false" @click.away="open = false"
                                    class="ml-12 relative">
                                    <div>
                                        <button @click="open = !open"
                                            class="flex items-center text-gray-400 hover:text-gray-600">
                                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div x-show="open" style="display: none;"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="transform opacity-0 scale-95"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100"
                                        x-transition:leave-end="transform opacity-0 scale-95"
                                        class="origin-top-right absolute right-0 mt-2 w-56 min-w-max-content rounded-md shadow-lg">
                                        <div class="rounded-md bg-white shadow-xs z-20">
                                            <div class="border-t border-gray-100"></div>
                                            <div class="py-1">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit
                                                    Message</a>
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Copy
                                                    Message</a>
                                            </div>
                                            <div class="border-t border-gray-100"></div>
                                            <div class="py-1">
                                                <a href="#"
                                                    class="block px-4 py-2 text-sm text-red-700 hover:bg-gray-100">Archive
                                                    Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="p-8">
                        {{ $message->body }}
                    </div>
                </div>
                <!--/card-->

                <!--Comments/Discussion-->
                <div class="md:mt-8 mt-2 overflow-hidden">
                    <div class="flex justify-between items-center">
                        <h2 class="text-3xl leading-9 font-extrabold text-gray-900">
                            Discussion
                        </h2>
                        <div>
                            <span
                                class="text-md bg-gray-600 text-white font-medium py-1 px-3 rounded-full">{{ $message->comment_count }}</span>
                        </div>
                    </div>
                    <div class="mt-6 border-t-2 border-gray-200 pt-6">

                        @foreach($message->comments as $comment)
                        <x-comment :comment="$comment" />
                        @endforeach

                        <h2 class="mt-6 text-2xl leading-9 font-bold text-gray-700">
                            Add A Comment
                        </h2>
                        @livewire('messages.comment-form', ['mid' => $message->id])
                    </div>
                </div>
                <!--/discussion-->
            </div>

            <div class="md:w-2/6 w-full">
                <div class="card">
                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ optional($message->category)->category_name }}
                        </h3>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Last Updated
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900">
                                    {{ dateLongFormat($message->updated_at) }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Email Address
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900">
                                    {{ truncate($message->owner->email, 18) }}
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                        <h4 class="text-sm leading-5 font-medium text-gray-500">
                            Labels
                        </h4>
                        @livewire('shared.label', ['label' => 'Accounts Me', 'id' => 1, 'type' => 'message'])
                    </div>

                    <div class="sm:col-span-2">
                        <div class="p-8">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Attached Files
                            </dt>
                            <dd class="mt-1 text-sm leading-5 text-gray-900">
                                <ul class="border border-gray-200 rounded-md">
                                    <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm leading-5">
                                        <div class="w-0 flex-1 flex items-center">
                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span class="ml-2 flex-1 w-0 truncate">
                                                resume_back_end_developer.pdf
                                            </span>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                            <a href="#"
                                                class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out">
                                                Download
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </dd>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/flex-->

    </div>
</main>

@endsection
