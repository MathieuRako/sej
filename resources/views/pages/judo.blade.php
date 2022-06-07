@extends('pages.template',['name' => $allcontent['website-name'][0],
                     'footer' => $allcontent['footer']])

@section('title', 'Judo')

@section('main')
    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center img">
                <img src="images/lutte1.jpg" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-lg-6 txt">
                <article class="card h-100 justify-content-center" style="border:0px">
                    <h1>{!! $allcontent['title'][0] !!}</h1>
                    <p class="grey">{!! $allcontent['paragraph'][0] !!}</p>
                    <a href="{{ $allcontent['button-link'][0] }}" class="btn">{!! $allcontent['button-text'][0] !!}</a>
                </article>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row imgtxtcenterright">
                <div class="col-lg-6 txt">
                    <article class="card h-100 justify-content-center" style="border:0px; background:none;">
                        <h1>{!! $allcontent['title'][1] !!}</h1>
                        <h5>{!! $allcontent['subtitle'][0] !!}</h5>
                        <p class="grey">{!! $allcontent['paragraph'][1] !!}</p>
                        <a href="{{ $allcontent['button-link'][1] }}" class="btn">{!! $allcontent['button-text'][1] !!}</a>
                    </article>

                </div>
                <div class="col-lg-6 d-flex flex-wrap align-items-center img">
                    <img src="images/jigorokano.jpg" class="align-self-center img-fluid imgshadow" alt="jigorokano"
                        width="100%">
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center img">
                <img src="images/lutte1.jpg" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-lg-6 txt">
                <article class="card h-100 justify-content-center" style="border:0px; background:none;">
                    <h1>{!! $allcontent['title'][2] !!}</h1>
                    <p class="grey">{!! $allcontent['paragraph'][2] !!}</p>
                    <div class="clearfix">
                        <a href="{{ $allcontent['button-link'][1] }}" class="btn">{!! $allcontent['button-text'][1] !!}</a>
                        <a href="{{ $allcontent['button-link'][2] }}" class="btn">{!! $allcontent['button-text'][2] !!}</a>
                        <a href="{{ $allcontent['button-link'][3] }}" class="btn">{!! $allcontent['button-text'][3] !!}</a>
                    </div>
                </article>

            </div>


        </div>
    </div>

@endsection