@extends('admin.template', ['breadcrumbs' => $breadcrumbs])
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3> {{ $breadcrumbs[count($breadcrumbs) - 1]}} text's <h3>


                </div>
            </div>
        </div>
    </div>
    @yield('content')
@endsection