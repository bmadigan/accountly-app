@extends('layouts.app')

@section('page_title') Create New Message @endsection

@section('content')

<x-page-header page="Create New Message" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        <livewire:messages.create>

    </div>
</main>

@endsection
