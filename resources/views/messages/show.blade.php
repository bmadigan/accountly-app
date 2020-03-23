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
                                            <time
                                                datetime="{{ dateShortFormat($message->created_at) }}">{{ dateLongFormat($message->created_at) }}</time>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-4 mt-4 flex-shrink-0 flex">
                                <span class="inline-flex rounded-md shadow-sm">
                                    <button type="button"
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-50 active:text-gray-800">
                                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                        </svg>
                                        <span>
                                            Phone
                                        </span>
                                    </button>
                                </span>

                                <span class="ml-3 inline-flex rounded-md shadow-sm">
                                    <button type="button"
                                        class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-50 active:text-gray-800">
                                        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884zM18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>
                                            Email
                                        </span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8">
                        {{ $message->body }}
                    </div>
                </div>
                <!--/card-->
            </div>

            <div class="md:w-2/6 w-full">
                <div class="card">
                    <div class="px-4 py-5 border-b border-gray-200 sm:px-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Meta Data
                        </h3>
                    </div>
                    <div class="px-4 py-5 sm:px-6">
                        <dl class="grid grid-cols-1 col-gap-4 row-gap-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Full name
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900">
                                    Margot Foster
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm leading-5 font-medium text-gray-500">
                                    Application for
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900">
                                    Backend Developer
                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div class="sm:col-span-2">
                        <div class="p-8">
                            <dt class="text-sm leading-5 font-medium text-gray-500">
                                Attachments
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
