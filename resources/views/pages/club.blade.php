@extends('pages.template',['name' => $allcontent['website-name'][0],
                     'footer' => $allcontent['footer']])


@section('title', 'Club')

@section('main')
    <div id="values" class="container">
        <h1 class="text-center my-5">{!! $allcontent['title-values'][0] !!}</h1>
        <p class="text-center my-5">{!! $allcontent['paragraph-values'][0] !!}</p>
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-4 ">
                <img src="images/limitbreak.jpg" class="align-self-center img-fluid imgshadow" alt="">
                <h4 class="mt-3">{!! $allcontent['title-value'][0] !!}</h4>
                <p class="d-none d-lg-block">{!! $allcontent['paragraph-value'][0] !!}</p>
            </div>
            <div class="col-lg-4">
                <img src="images/friendship.jpg" class="align-self-center img-fluid imgshadow" alt="">
                <h4 class="mt-3">{!! $allcontent['title-value'][1] !!}</h4>
                <p class="d-none d-lg-block">{!! $allcontent['paragraph-value'][1] !!}</p>
            </div>
            <div class="col-lg-4 ">
                <img src="images/handshake.jpg" class="align-self-center img-fluid imgshadow" alt="">
                <h4 class="mt-3">{!! $allcontent['title-value'][2] !!}</h4>
                <p class="d-none d-lg-block">{!! $allcontent['paragraph-value'][2] !!}</p>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="history" style="margin-top:15%">
        <div class="container">
            <div class="row imgtxtcenterright">

                <div class="col-lg-6 txt">
                    <article class="card h-100 justify-content-center border-0 bg-light">
                        <h1>{!! $allcontent['title-history'][0] !!}</h1>
                        <p>{!! $allcontent['paragraph-history'][0] !!}</p>
                        <p>{!! $allcontent['paragraph-history'][1] !!}</p>
                    </article>

                </div>
                <div class="col-lg-6 img d-flex flex-wrap align-items-center">
                    <img src="images/oldmaster.jpeg" class="align-self-center img-fluid imgshadow" alt="" width="70%"
                        style="height: 90%">
                </div>
            </div>
        </div>
    </div>

    <div id="structure" style="margin-top:3%">
        <div class="container bg-white">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 d-flex justify-content-center">
                    <img src="images/gymnase.jpg" class="align-self-center img-fluid imgshadow bg-white" style="height: 90%"
                        alt="" width="80%">
                </div>
                <div class="col-lg-5" style="margin-top: 2%;">
                    <article class="card h-100 justify-content-center border-0 bg-white">
                        <h1>{!! $allcontent['title-structure'][0] !!}</h1>
                        <p>{!! $allcontent['paragraph-structure'][0] !!}</p>
                        <p><img src="images/house.svg" alt="house" style="box-shadow: none;"> Somewhere</p>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div id="rules" style="margin-top:3%;padding:2%;">
        <div class="container bg-light">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5" style="margin-top: 2%;">
                    <article class="card h-100 justify-content-center border-0 bg-light">
                        <h1>{!! $allcontent['title-rules'][0] !!}</h1>
                        <ul>
                            @foreach ($allcontent['rule'] as $rule)
                                <li>{!! $rule !!}</li>
                            @endforeach
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div id="trainers" class="container my-4">

        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
            <h1 class="d-flex justify-content-center" style="margin-bottom:2%;">Our Trainers</h1>
            <!--Controls-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                @for ($i = 0; $i < count($trainers); $i += 3)
                    <div class="carousel-item {{ $i == 0 ? 'active' : ' ' }} ">
                        <div class="row">
                            @for ($j = 0; $j < 3; $j++)
                                @isset($trainers[$i + $j])
                                    <div class="col-lg-4 {{ $j != 0 ? 'clearfix d-none d-lg-block' : '' }} ">
                                        <div class="card mb-2">
                                            <img class="card-img-top imgshadow" src="images/entraineur1.jpg"
                                                alt="Card image cap" style="width: auto;
                                                                                        height: 500px;">
                                            <div class="card-body">

                                                <h4 class="card-title text-center">{{ $trainers[$i + $j]['name'] }}
                                                    {{ $trainers[$i + $j]['firstname'] }}</h4>
                                         
                                                <p style="font-size: 80%;" class="text-center">{{ $trainers[$i + $j]['age'] }}
                                                    years old</p>
                              
                                                <img src="images/envelope.svg" alt="envelope" style="box-shadow: none;">
                                                {{ $trainers[$i + $j]['mail'] }}
                                                </br> <img src="images/telephone.svg" alt="telephone" style="box-shadow: none;">
                                                {{ $trainers[$i + $j]['phone_number'] }}
                                       
                                                <p class="card-text mt-2">{{ $trainers[$i + $j]['informations'] }}</p>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                @endisset
                            @endfor
                        </div>
                    </div>
                @endfor




            </div>
            <!--/.Slides-->
            <div class="controls-top d-flex justify-content-center p-4">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><img src="images/chevronleft.png"
                        style="height:50px; width:50px;box-shadow:none;"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><img src="images/chevronright.png"
                        style="height:50px; width:50px;box-shadow: none;"></i></a>
            </div>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->

        
    </div>
@endsection
