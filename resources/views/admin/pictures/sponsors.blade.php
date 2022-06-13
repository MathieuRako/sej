@extends('admin.template', ['breadcrumbs' => ['']])
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Sponsors size</h4>
                </div>
                <div class="card-body">
                    <form action="sponsors" id="form" method="POST">
                        @csrf
                        <select name="size" form="form">
                            <option value="nosize">---- Select a size ----</option>
                            @for ($i = 1; $i <= $sizes; $i++)
                                <option value="{{ $i }}">{!! $i !!}</option>
                            @endfor

                        </select>
                        <input type="submit" value="See sponsors">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @isset($sponsors)
        @foreach ($sponsors as $sponsor)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4 d-flex justify-content-center">
                                    <{!! image_html($sponsor) !!} width="100%" style="max-height:200px">
                                </div>
                                <div class="col-8">
                                    <div class="card h-100 justify-content-center shadow-none bg-none " style="border:0px;">
                                        <?php $tab = explode('/', $sponsor['link']); ?>
                                        <h4></h4>
                                        <form method="POST" id=" {{ $sponsor['id'] }} " enctype="multipart/form-data"
                                            action="sponsors/update">
                                            @csrf
                                            
                                            <label for="alt">Name</label><br>
                                            <input type="text" name="alt" value={{ $sponsor['name'] }}><br>
                                            <label for="size_">Size</label>
                                            <select name="size_" form="{{ $sponsor['id'] }}">
                                                @if (!isset($sponsor['size']))
                                                    <option value="nosize">---- Select a size ----</option>
                                                @endif
                                                @for ($i = 1; $i <= $sizes; $i++)
                                                    
                                                        <option value="{{ $i }}"
                                                            {{ isset($sponsor['size']) && $sponsor['size'] == $i ? 'selected="selected"' : '' }}>
                                                            {!! $i !!}</option>
                                             
                                                @endfor

                                            </select><br>
                                            <label for="file" class="mt-1">{!! preg_replace('/\d{14}/', '', $tab[count($tab) - 1]) !!}</label><br>
                                            <input type="file" name="image" accept="image/png, image/jpeg, image/jpg"><br>
                                            <input type="hidden" name="id" value="{{ $sponsor['id'] }}">
                                            <input type="submit" class="btn-red mt-2" value="Update">
                                            <a href = "sponsors/remove?id={{ $sponsor['id'] }}"><i class="fa-solid fa-circle-minus"></i></a>
                                        </form>
                                        @isset($sponsor['updated_at'])
                                            <p style="font-size:11.5px;margin-top:5%;"><i>Last updated
                                                    {{ $sponsor['updated_at'] }}</i></p>
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
