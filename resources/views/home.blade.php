<x-layouts.app>

@section('page_title') Dashboard @endsection

<x-ui.page-header page="Dashboard" />

<main>
    <div class="app-container sm:px-6 lg:px-8">

        @include('dashboard._stats-yearly')

        <div class="card mt-8">
            <div class="px-4 py-5 sm:p-6">

                <div class="my-4">
                    @include('dashboard._charts')
                </div>
            </div>
        </div>
    </div>
</main>

</x-layouts.app>
