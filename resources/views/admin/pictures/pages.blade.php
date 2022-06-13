@extends('admin.template', ['breadcrumbs' => ['']])


@section('content')
    <div class="row">
        <div class"col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Pages</h4>
                </div>
                <div class="card-body">
                    <form action="pages" id="form" method="POST">
                        @csrf
                        <select name="id" id="page" form="form">
                            <option value="nopage">---- Select a page ----</option>
                            <option value="general">general</option>
                            @foreach ($pages as $page)
                                <option value="{{ $page['id'] }}">{!! $page['name'] !!}</option>
                                
                            @endforeach
                          
                        </select>
                        <input type="submit" value="See pictures">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @isset($pictures)
        @foreach ($pictures as $picture)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex justify-content-center">
                                    <{!! image_html($picture) !!} width="350px" style="max-height:500px">
                                </div>
                                <div class="col-8">
                                    <div class="card h-100 justify-content-center shadow-none bg-none " style="border:0px;">
                                        <?php $tab = explode('/', $picture['link']); ?>
                                        <h4>{!! preg_replace('/\d{14}/', '', $tab[count($tab) - 1]) !!}</h4>
                                        <form method="POST" enctype="multipart/form-data" action="/admin/pictures/update">
                                            @csrf
                                            <label for="alt">alt</label><br>
                                            <input type="text" name="alt" value={{ $picture['alt'] }}><br>
                                            <label for="file" class="mt-1">Image (jpeg, png,jpg)</label><br>
                                            <input type="file" name="image" accept="image/png, image/jpeg, image/jpg"><br>
                                            <input type="hidden" name="id" value={{ $picture['id'] }}>
                                            <input type="submit" class="btn-red mt-2" value="Update">
                                        </form>
                                        @isset($picture['updated_at'])
                                            <p style="font-size:11.5px;margin-top:5%;"><i>Last updated
                                                    {{ $picture['updated_at'] }}</i></p>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    @endisset
@endsection
