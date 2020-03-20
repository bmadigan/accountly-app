@extends('layouts.app')

@section('page_title') Dashboard @endsection

@section('content')
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <h2 class="text-lg leading-6 font-semibold text-gray-900">
                Dashboard
            </h2>
        </div>
    </header>

    <main>
        <div class="app-container sm:px-6 lg:px-8">
            <div class="card">
                <div class="px-4 py-5 sm:p-6">
                    Hello?
                    <div class="my-4">
                        <button class="btn btn-primary">Im a Button</button>

                        <button class="btn btn-secondary">Im a 2nd Button</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
