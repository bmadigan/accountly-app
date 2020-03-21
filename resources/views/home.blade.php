@extends('layouts.app')

@section('page_title') Dashboard @endsection

@section('content')


    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex-1 min-w-0">
                    <h2 class="flex-1 text-lg leading-6 font-semibold text-gray-900">
                        Dashboard
                    </h2>
                </div>
            <div class="mt-4 flex md:mt-0 md:ml-4">
                @livewire('teams.team-dropdown')
            </div>
            </div>
        </div>
    </header>

    <main>
        <div class="app-container sm:px-6 lg:px-8">
            <div class="card">
                <div class="px-4 py-5 sm:p-6">

                    @livewire('hello-world')

                    <div>
                        TeamTest: {{ auth()->user()->currentTeam()->name }}
                    </div>

                    <div class="my-4">
                        <button class="btn btn-primary">Im a Button</button>

                        <button class="btn btn-secondary">Im a 2nd Button</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
