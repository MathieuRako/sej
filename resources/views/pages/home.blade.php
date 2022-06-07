@extends('pages.template',['name' => $allcontent['website-name'][0],
                     'footer' => $allcontent['footer']])

@section('title')
    {{ $page['title'] }}
@endsection

@section('main')
<div class="container">
    <div class="row imgtxtcenterleft">
        <div class="col-lg-6 d-flex flex-wrap align-items-center">
            <{!! image_html($allcontent['pictures'][0]) !!} class="align-self-center img-fluid imgshadow"  width="100%">
        </div>
        <div class="col-lg-6 txt">
            <article class="card h-100 justify-content-center" style="border:0px">
                <h1>{!! $allcontent['title'][0] !!}</h1>
                <p class="grey">{!! $allcontent['paragraph'][0] !!}</p>
                <a href="{!! $allcontent['button-link'][0] !!}"
                    class="btn">{!! $allcontent['button-text'][0] !!}</a>
            </article>

        </div>
    </div>
</div>

<div class="container-fluid" id="imgtxtlarge">

    <div class="row">

        <div class="col-lg-7 txt">
            <article class="card h-100 justify-content-center ml-lg-5 p-5"
                style="background-color:rgba(255, 255, 255, 0); border:0px">
                <h1>{!! $allcontent['title'][1] !!}</h1>
                <p class="grey">{!! $allcontent['paragraph'][1] !!}</p>
                <a href="{!! $allcontent['button-link'][1] !!}" class="btn">
                    {!! $allcontent['button-text'][1] !!}</a>
            </article>
        </div img>
        <div class="col-lg-5" style="
            background-image: linear-gradient(
        rgba(53, 76, 116, 0.4),
        rgba(28, 36, 81, 0.4)
    ), url('{!! $allcontent['pictures'][1]['link'] !!}');
            background-position: center;
            background-size:cover;
            height:40em">

        </div>
    </div>
</div>
    <div style="margin-bottom:0% !important;">
        <div class="container-fluid">

            <h1 class="mb-5 text-center">{!! $allcontent['title'][2] !!}</h1>
            <div class="row justify-content-center" id="trainerspictures">

                <div class="col-lg-6 row">
                    <div class="col-md-6">
                        <img src="{{ $trainers[0]['picture'] }}" class="align-self-center img-fluid imgshadow" alt="">
                        <h4>{!! $trainers[0]['name'] !!} {!! $trainers[0]['firstname'] !!}</h4>
                        <p>{!! $trainers[0]['phone_number'] !!} </br> {!! $trainers[0]['mail'] !!}</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ $trainers[1]['picture'] }}" class="align-self-center img-fluid imgshadow" alt="">
                        <h4>{!! $trainers[1]['name'] !!} {!! $trainers[1]['firstname'] !!}</h4>
                        <p>{!! $trainers[1]['phone_number'] !!} </br> {!! $trainers[1]['mail'] !!} </p>
                    </div>

                </div>
                <div class="col-lg-6 row " ;>
                    <div class="col-md-6" id="onlybigscreen">
                        <img src="{{ $trainers[2]['picture'] }}" class="align-self-center img-fluid imgshadow" alt="{{ $trainers[2]['name'] }}'s photo">
                        <h4>{!! $trainers[2]['name'] !!} {!! $trainers[2]['firstname'] !!}</h4>
                        <p>{!! $trainers[2]['phone_number'] !!} </br> {!! $trainers[2]['mail'] !!} </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ $trainers[3]['picture'] }}" class="align-self-center img-fluid imgshadow" alt="{{ $trainers[3]['name'] }}'s photo">
                        <h4>{!! $trainers[3]['name'] !!} {!! $trainers[3]['firstname'] !!}</h4>
                        <p>{!! $trainers[3]['phone_number'] !!} </br> {!! $trainers[3]['mail'] !!} </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="p-5 bg-image" style="
            background-image: linear-gradient(
            rgba(53, 76, 116, 0.4),
            rgba(28, 36, 81, 0.4)
        ),url('{!! $allcontent['pictures'][2]['link'] !!}');
            background-position: center;
            background-size:cover;
            height:100%;
            margin-top:0%;
            width:auto;">
        <div id="testimony" class="row" style="color:white;
                                        font-size:1.5em;">

            <div class="col-md-4 my-md-auto">
                <blockquote class="blockquote mb-0 mx-md-auto">
                    <p class="txtshadow ">{!! $allcontent['parent-testimony'][0] !!}</p>
                    <footer class="blockquote-footer text-white ">
                        <small>
                            {!! $allcontent['parent'][0] !!}
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="col-md-4 my-md-auto">
                <blockquote class="blockquote mb-0 mx-md-auto ">
                    <p class="txtshadow ">{!! $allcontent['parent-testimony'][1] !!}</p>
                    <footer class="blockquote-footer text-white ">
                        <small>
                            {!! $allcontent['parent'][1] !!}
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="col-md-4 my-md-auto">
                <blockquote class="blockquote mb-0 mx-md-auto  ">
                    <p class="txtshadow ">{!! $allcontent['parent-testimony'][2] !!}</p>
                    <footer class="blockquote-footer text-white ">
                        <small>
                            {!! $allcontent['parent'][2] !!}
                        </small>
                    </footer>
                </blockquote>
            </div>
        </div>


    </div>

    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center">
                <{!! image_html($allcontent['pictures'][3]) !!}  class="align-self-center img-fluid imgshadow" style="height:400px " 
                    width="100%">
            </div>
            <div class="col-lg-6 txt ">
                <article class="card h-100 justify-content-center" style="border:0px;">
                    <h1>{!! $allcontent['title'][3] !!}
                    </h1>
                    <p>{!! $allcontent['paragraph'][2] !!}</p>
                    <a href="{!! $allcontent['button-link'][2] !!}" class="btn">{!! $allcontent['button-text'][2] !!}</a>
                </article>
            </div>
        </div>
    </div>
    <div class="p-5 bg-image" style="
                background-image: linear-gradient(
            rgba(53, 76, 116, 0.4),
            rgba(28, 36, 81, 0.4)
        ), url('{!! $allcontent['pictures'][4]['link'] !!}');
                background-position: center;
                background-size:cover;
                height:100%;
                
                width:auto;
                ">
        <div class="d-flex justify-content-center align-items-center h-100">
            <article class="text-white text-banneer" style=" text-shadow: black 1px 0 10px;">
                <h1 class="mb-3">{!! $allcontent['title'][4] !!}
                </h1>
                <p>{!! $allcontent['paragraph'][3] !!}</p>
                <p>{!! $allcontent['paragraph'][4] !!}</p>
            </article>
        </div>
    </div>
@endsection
