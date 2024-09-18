@extends('admin.template')

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
                    <table class="table mb-5">

                        <tbody>
                            @foreach ($judokas as $judoka)
                                <tr>
                                    <td>
                                        <span><strong>{{ $judoka['name'] }}</strong> {{ $judoka['firstname'] }}</span>

                                    </td>
                                    <td>
                                        <form method="POST" action="judokas/update" class="clearfix w-75">
                                            @csrf
                                            <label for="points">Points</label>
                                            <input type="text" class="w-25" name="points" value="{!! $judoka['points'] !!} ">
                                            <input type="hidden" name="id" value={{ $judoka['id'] }}>
                                            <input type="hidden" name="phone" value="{{ $judoka['phone_number'] }}">
                                            <input type="hidden" name="points" value="{{ $judoka['points'] }}">
                                            <input type="hidden" name="name" value="{{ $judoka['name'] }}">
                                            <input type="hidden" name="firstname" value="{{ $judoka['firstname'] }}">
                                            <input type="hidden" name="belt" value="{{ $judoka['belt'] }}">
                                            <input type="hidden" name="age" value="{{ $judoka['age'] }}">
                                            <input type="submit" class="btn-red" value="Update">
                                        </form>
                                    </td>
                                    <td>
                                        <a class="h5" href="/admin/judokas/remove?id={{ $judoka['id'] }}"><i
                                                class="fa-solid fa-circle-minus"></i></a>
                                        <a class="h5" href="/admin/judokas/remove?id={{ $judoka['id'] }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                        {!! $judokas->render() !!}
                    </table>
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
