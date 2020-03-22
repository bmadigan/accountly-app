@extends('layouts.app')

@section('page_title') Messages @endsection

@section('content')

<x-page-header page="Messages" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        <livewire:messages.index>

    </div>
</main>

@endsection
