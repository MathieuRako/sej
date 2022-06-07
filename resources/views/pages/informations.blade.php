@extends('pages.template', ['name' => $allcontent['website-name'][0], 'footer' => $allcontent['footer']])


@section('title', 'Informations')
@section('subtitle')
    <h4>Training hours - Prices - Location - Insurance papers</h4>
@endsection

@section('main')

    <div class="container-fluid">
        <div id="traininghours" class="container ">
            <h1 class="text-center mt-2">{!! $allcontent['title'][0] !!}</h1>
            @for ($i = 0; $i < count($schedule); $i += 2)
                <div class="row row-cols-1 my-5">
                    @for ($j = 0; $j < 2; $j++)
                        @isset($schedule[$i + $j])
                            <?php
                            $s = $schedule[$i + $j];
                            ?>
                            <div class="col-md shadows {{ $j == 1 ? ' ml-md-5' : '' }}">
                                <div class=" py-3">
                                    <h3>{{ $s['name'] }}</h3>
                                </div>
                                <div class="hours">
                                    @foreach ($s['trainings'] as $t)
                                        <div class="row">
                                            <div class="col-md ml-md-5">{{ $t['day'] }}</div>
                                            <div class="col-md mr-md-5 text-right">{{ $t['hours'] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endisset
                    @endfor
                </div>
            @endfor
        </div>
    </div>




    <div>
        <div id="location" class="container">
            <div class="row imgtxtcenterright">
                <div class="col-lg-6">
                    <div id="map-container-google-3  img mt-auto mb-auto " class="shadows z-depth-1-half map-container-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5010.679141224591!2d4.99505226798338!3d51.10219472524975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c148f1cfdb371f%3A0xccab4b3823f31393!2sJC%20Samurai%20Eindhout!5e0!3m2!1sfr!2sbe!4v1651184732163!5m2!1sfr!2sbe"
                            frameborder="0" style="border:0; width:100%;height:100%;" allowfullscreen></iframe>
                    </div>
                    <div class="fst-italic text-center mt-2">Kromstraat 3, 2430 Laakdal</div>
                </div>
                <div class="col-lg-6 txt">
                    <article class="card h-100 justify-content-center ml-lg-5" style="border:0px; background:none">
                        <h1>{!! $allcontent['title'][1] !!} </h1>
                        <p class="grey">{!! $allcontent['paragraph'][0] !!} </p>
                        <a href="{{ $allcontent['button-link'][0] }}" class="btn">{!! $allcontent['button-text'][0] !!}</a>


                    </article>
                </div>
            </div>
        </div>
    </div>
    <div id="ranking" class="pb-2">
        <h1 class="text-center pb-5">Top 10</h1>
        <div class="container">



            <div id="tohide">
                <div id="podium-box" class="row pb-5 mb-2">
                    @isset($rank[1])
                        <div class="col-md-4 step-container m-0 p-0">
                            <div class="name">
                                <h2>{{ $rank[1]['name'] }} {{ $rank[1]['firstname'] }}</h2>
                                <p>{{ $rank[1]['points'] }} pts</p>
                            </div>
                            <div id="second-step" class="step px-5  centerBoth podium-number">
                                2
                            </div>

                        </div>
                    @endisset
                    @isset($rank[0])
                        <div class="col-md-4 step-container m-0 p-0">
                            <div class="name">
                                <h2>{{ $rank[0]['name'] }} {{ $rank[0]['firstname'] }}</h2>
                                <p>{{ $rank[0]['points'] }} pts</p>
                            </div>
                            <div id="first-step" class="step px-5  centerBoth podium-number">
                                1
                            </div>
                        </div>
                    @endisset
                    @isset($rank[2])
                        <div class="col-md-4 step-container m-0 p-0">
                            <div class="name">
                                <h2>{{ $rank[2]['name'] }} {{ $rank[2]['firstname'] }}</h2>
                                <p>{{ $rank[2]['points'] }} pts</p>
                            </div>

                            <div id="third-step" class="step  px-5 centerBoth podium-number">
                                3
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
            <table class="table mb-5">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Belt</th>
                        <th scope="col">Points</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($rank as $r)
                        @isset($r)
                            <tr>
                                <th scope="row">{{ $i = $i + 1 }}</th>
                                <td><strong>{{ $r['name'] }}</strong> {{ $r['firstname'] }}</td>
                                <td>{{ $r['age'] }}</td>
                                <td>{{ $r['belt'] }}</td>
                                <td>{{ $r['points'] }}</td>
                            </tr>
                        @endisset
                    @endforeach

                </tbody>
            </table>




        </div>
    </div>
@endsection
