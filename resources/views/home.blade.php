@extends('layouts.app')

@section('page_title') Dashboard @endsection

@section('content')

<x-page-header page="Dashboard" />

<main>
    <div class="app-container sm:px-6 lg:px-8">
        <div class="card">
            <div class="px-4 py-5 sm:p-6">

                <livewire:hello-world>

                    <div>
                        TeamTest: {{ auth()->user()->currentTeam()->name }}
                    </div>

                    <div class="my-4">
                        <button class="btn btn-primary">Im a Button</button>

                        <button class="btn btn-secondary">Notify</button>
                    </div>
            </div>
        </div>
    </div>
</main>

@endsection
