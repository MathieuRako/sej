@extends('admin.template', ['breadcrumbs' => ['judokas']])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="judokas" method="POST">
                        @csrf
                        <span>Search a Judoka</span><br>
                        <input type="search" id="site-search" name="search">
                        <input type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-header">
                        <h3>Judokas</h3>
                    </div>
                    @foreach ($judokas as $judoka)
                        <form method="POST" action="judokas/update" class="clearfix">
                            @csrf
                            <div class="row text-center">
                                <div class="col-3">
                                    <label for="name">Name</label><br>
                                    <input type="Name" name="name" class="w-75" value="{{ $judoka['name'] }}">
                                </div>

                                <div class="col-3">
                                    <label for="name">Firstname</label><br>
                                    <input type="Name" name="firstname" class="w-75"
                                        value="{{ $judoka['firstname'] }}">
                                </div>
                                <div class="col-2">
                                    <label for="name">Belt</label><br>
                                    <input type="Name" name="belt" class="w-75" value="{{ $judoka['belt'] }}">
                                </div>
                                <div class="col-1">
                                    <label for="name">Age</label><br>
                                    <input type="Name" name="age" class="w-75" value="{{ $judoka['age'] }}">
                                </div>
                                <div class="col-2">
                                    <label for="name" class=>Phone</label><br>
                                    <input type="Name" name="phone" class="w-75"
                                        value="{{ $judoka['phone_number'] }}">
                                </div>
                                <div class="col-1">
                                    <label for="name">Points</label><br>
                                    <input type="Name" class="w-75" name="points"
                                        value="{{ $judoka['points'] }}">

                                </div>

                            </div>
                            <input type="hidden" name="id" value={{ $judoka['id'] }}>
                            <div class = "mt-2 mb-4 float-right">
                                <input type="submit" class="btn-red" value="Update">
                                <a href = "/admin/judokas/remove?id={{ $judoka['id'] }}"><i class="fa-solid fa-circle-minus"></i></a>
                            </div>

                        </form>
                    @endforeach
                    {!! $judokas->render() !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3> Add a new judoka</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="judokas/add">
                        @csrf
                        <div class="row text-center">
                            <div class="col-3">
                                <label for="name">Name</label><br>
                                <input type="Name" name="name" class="w-75">
                            </div>

                            <div class="col-3">
                                <label for="name">Firstname</label><br>
                                <input type="Name" name="firstname" class="w-75">
                            </div>
                            <div class="col-2">
                                <label for="name">Belt</label><br>
                                <input type="Name" name="belt" class="w-75">
                            </div>
                            <div class="col-1">
                                <label for="name">Age</label><br>
                                <input type="Name" name="age" class="w-75">
                            </div>
                            <div class="col-2">
                                <label for="name" class=>Phone</label><br>
                                <input type="Name" name="phone" class="w-75">
                            </div>
                            <div class="col-1">
                                <label for="name">Points</label><br>
                                <input type="Name" class="w-75" name="points">
                            </div>
                        </div>
                        <input type="hidden" name="id">
                        <input type="submit" class="btn-red mt-2 mb-4 float-right" value="Add">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
