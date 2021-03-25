@extends('vendor.rw-real-estate.layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">PHP Senior Level Test</h1>
    </div>
    <div>
        <h2 class="c-title c-title--h2">Property {!! $property->reference !!}</h2>

        <section class="c-properties-grid__wrapper">
            <div class="c-properties-grid">
                @include('vendor.rw-real-estate.partials.property_single')
            </div>
        </section>

    </div>
@endsection

@push('css')
    <style>

    </style>
@endpush

@push('js')
    <script>

    </script>
@endpush
