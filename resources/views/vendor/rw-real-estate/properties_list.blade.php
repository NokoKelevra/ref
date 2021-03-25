
@extends('vendor.rw-real-estate.layouts.base')

@section('content')
    <div class="title m-b-md">
        <h1 class="c-title c-title--h1">PHP Senior Level Test</h1>
    </div>
    <label for="location">
        Location:
        <select id="filter" name="location" id="location">
            <option value="" selected="selected">-</option>
            @foreach ($locations as $location)
                <option value="{!! $location->name !!}">{!! $location->name !!}</option>
            @endforeach
            
        </select>
    </label>
    <div class="container">

        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>Reference</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Location</th>
                    <th width="100px">Action</th>
                </tr>

            </thead>

            <tbody>

            </tbody>

        </table>

    </div>
@endsection

@push('css')
    <style>

    </style>
@endpush

@push('js')

    <script type="text/javascript">
        $(document).ready(function(){
            $(function () {

                var $table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    order: [[ 2, "desc" ]],
                    pageLength: 20,
                    columns: [
                        {data: 'reference', name: 'reference'},
                        {data: 'name', name: 'name'},
                        {data: 'price', name: 'price'},
                        {data: 'location_name', name: 'location_name'},
                        {data: 'action', name: 'action', orderable: false, searchable: false},
                    ]
                });
               

            });

             $("#filter").change(function(){
                if($(this).val() != ""){
                    $('.data-table').DataTable().column(3).data().search($(this).val()).draw();
                }

            });
            
        }); 
    </script>
@endpush
