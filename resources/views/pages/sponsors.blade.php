@extends('pages.template', ['name' => $allcontent['website-name'][0], 
                            'footer' => $allcontent['footer'], 
                            'pictures' => $allcontent['general-pictures'],
                            'sponsors' => $allcontent['sponsors']])


@section('title', 'Sponsors')


@section('main')

    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center img">
                <{!! image_html($allcontent['pictures'][0]) !!} class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-lg-6 txt">
                <article class="card h-100 justify-content-center" style="border:0px">
                    <h1>{!! $allcontent['title'][0] !!} </h1>
                    <p class="grey">{!! $allcontent['paragraph'][0] !!} </p>

                </article>

            </div>
        </div>

    </div>
    
    <div id="allsponsors" class="container mb-5" style="background:none !important">
        <div class="row mb-md-5 d-flex justify-content-center">
        
            @for ($i = 0; $i < 3; $i += 3)
                @for ($j = $i; $j < 3; $j++)
                
                    <?php @$sponsor = $allcontent['sponsors'][0][$j + $i]; ?>
                    
                    @isset($sponsor)
                        <div class="col-lg-4">

                            <a target="_blank" href = "{{ $sponsor['link'] }}"><{!! image_html($sponsor) !!} class="align-self-center img-fluid imgshadow" width="100%" height="100%"></a>

                        </div>
                    @endisset
                @endfor
            @endfor
        </div>
        <div class="row mb-md-5 d-flex justify-content-center">
            @for ($i = 0; $i < 4; $i += 4)
                @for ($j = $i; $j < 4; $j++)
                    <?php @$sponsor = $allcontent['sponsors'][1][$j + $i]; ?>
                    @isset($sponsor)
                        <div class="col-lg-3">

                            <a class = "shadow-none" target="_blank" href = "{{ $sponsor['link'] }}"><{!! image_html($sponsor) !!} class="align-self-center img-fluid imgshadow" width="100%" height="100%"></a>

                        </div>
                    @endisset
                @endfor
            @endfor
        </div>
        <div class="row mb-md-5 d-flex justify-content-center">
            @for ($i = 0; $i < 6; $i += 6)
                @for ($j = $i; $j < 6; $j++)
                    <?php @$sponsor = $allcontent['sponsors'][2][$j + $i]; ?>
                    @isset($sponsor)
                        <div class="col-lg-2">

                            <a class = "shadow-none" target="_blank" href = "{{ $sponsor['link'] }}"><{!! image_html($sponsor) !!} class="align-self-center img-fluid imgshadow" width="100%" height="100%"></a>

                        </div>
                    @endisset
                @endfor
            @endfor
        </div>
    </div>


    



@endsection
