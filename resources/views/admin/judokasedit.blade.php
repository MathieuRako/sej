@extends('admin.template')

@section('content')
    @isset($judoka)
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form method="POST" action="judokas/update" class="clearfix">
                        @csrf
                        <div class="row text-center">
                            <div class="col-3">
                                <label for="name">Name</label><br>
                                <input type="text" name="name" class="w-75" value="{{ $judoka['name'] }}">
                            </div>

                            <div class="col-3">
                                <label for="name">Firstname</label><br>
                                <input type="text" name="firstname" class="w-75" value="{{ $judoka['firstname'] }}">
                            </div>
                            <div class="col-2">
                                <label for="name">Belt</label><br>
                                <input type="text" name="belt" class="w-75" value="{{ $judoka['belt'] }}">
                            </div>
                            <div class="col-1">
                                <label for="name">Age</label><br>
                                <input type="text" name="age" class="w-75" value="{{ $judoka['age'] }}">
                            </div>
                            <div class="col-2">
                                <label for="name" class=>Phone</label><br>
                                <input type="text" name="phone" class="w-75" value="{{ $judoka['phone_number'] }}">
                            </div>
                            <div class="col-1">
                                <label for="name">Points</label><br>
                                <input type="Name" class="w-75" name="points" value="{{ $judoka['points'] }}">

                            </div>

                        </div>
                        <input type="hidden" name="id" value={{ $judoka['id'] }}>
                        <div class="mt-2 mb-4 float-right">
                            <input type="submit" class="btn-red" value="Update">
                            <a href="/admin/judokas/remove?id={{ $judoka['id'] }}"><i
                                    class="fa-solid fa-circle-minus"></i></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    @endisset
@endsection
