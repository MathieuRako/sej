@extends('admin.template')
@section('title')
    @yield('title')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3> {{ Request::path() }} text's <h3>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
@endsection