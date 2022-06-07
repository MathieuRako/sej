@extends('pages.template',['name' => $allcontent['website-name'][0],
                     'footer' => $allcontent['footer']])


@section('title', 'Sponsors')

@section('main')
    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center img">
                <img src="images/lutte1.jpg" class="align-self-center img-fluid imgshadow" alt="" width="100%">
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
        <div class="row mb-md-5">
            <div class="col-lg-4">
                <img src="images/sponsor1.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-lg-4">
                <img src="images/sponsor3.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-lg-4">
                <img src="images/sponsor2.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
        </div>
        
        <div class="row mb-md-5">
            <div class="col-md-3">
                <img src="images/sponsor4.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-3">
                <img src="images/sponsor5.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-3">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
            <div class="col-md-3">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
        </div>
        <div class="row mb-md-5">
            <div class="col-md-3">
                <img src="images/sponsor4.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-3">
                <img src="images/sponsor5.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-3">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
            <div class="col-md-3">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
        </div>
        <div class="row mb-md-5">
            <div class="col-md-2">
                <img src="images/sponsor4.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-2">
                <img src="images/sponsor5.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-2">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
            <div class="col-md-2">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div> 
            <div class="col-md-2">
                <img src="images/sponsor4.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-2">
                <img src="images/sponsor5.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>

        </div>
        <div class="row mb-md-5">
            <div class="col-md-2">
                <img src="images/sponsor4.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-2">
                <img src="images/sponsor5.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-2">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>  
            <div class="col-md-2">
                <img src="images/sponsor6.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div> 
            <div class="col-md-2">
                <img src="images/sponsor4.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-md-2">
                <img src="images/sponsor5.png" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>

        </div>

    </div>
@endsection