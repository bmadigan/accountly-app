<x-layouts.app>

@section('page_title') Dashboard @endsection

<x-ui.page-header page="Dashboard" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        <x-dashboard.stats-yearly year="2020" revenue="2800" expenses="1200" profit="1600" />

        <x-dashboard.charts />

    </div>
</main>

</x-layouts.app>
