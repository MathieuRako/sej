@extends('pages.template',['name' => $allcontent['website-name'][0],
                     'footer' => $allcontent['footer'],
                     'pictures' => $allcontent['general-pictures']])

@section('title', 'Belts/Graden')

@section('main')

    <div class="container d-flex justify-content-center">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 d-flex justify-content-center">
                <{!! image_html($allcontent['pictures'][0]) !!} class="align-self-center img-fluid imgshadow bg-light"
                    style="height: 90%" alt="" width="80%">
            </div>
            <div class="col-lg-5" style="margin-top: 2%;">
                <article class="card h-100 justify-content-center border-0" style="border:0px">
                    <h1>{!! $allcontent['title'][0] !!}</h1>
                    <p>{!! $allcontent['paragraph'][0] !!}</p>

                </article>
            </div>

        </div>
    </div>


    <div class="container-fluid p-5 bg-light" id="imgtxtlarge">
        <div class="row d-flex justify-content-around">



            <div class="col-lg-4">
                <article class="text-center bg-light card h-100 justify-content-center" style="border:0px;">
                    <h1>{!! $allcontent['title'][1] !!}</h1>
                    <p>{!! $allcontent['paragraph'][1] !!}</p>
                </article>
            </div>
            <div class="col-lg-5">
                <div class="embed-responsive embed-responsive-16by9 shadow p-3 mb-5 bg-light rounded"
                    style="margin-top:2%;">
                    <iframe class="" width="200" height="150" src="{!! $allcontent['youtube-video'][0] !!}"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
