@extends('pages.template',['name' => $allcontent['website-name'][0],
                     'footer' => $allcontent['footer'],
                     'pictures' => $allcontent['general-pictures']])

@section('title', 'Contact')

@section('main')
    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center">
                <{!! image_html($allcontent['pictures'][0]) !!} class="align-self-center img-fluid imgshadow" width="100%">
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
    <div id="contactform" class="container-fluid">
        <div id="location" class="container">
            <div class="row imgtxtcenterleft" >

                <div class="col-lg-6 " >
                    
                        <section class="card h-100 text-center justify-content-center ml-lg-5" style="border:none; background:none;">
    
                            <!--Section heading-->
                            <h2 class="h1-responsive font-weight-bold">{!! $allcontent['title-form'][0] !!}</h2>
                            <!--Section description-->
                            <p class="w-responsivemb-5">{!! $allcontent['paragraph-form'][0] !!}</p>
        
                            <div class=" mx-auto  row d-flex justify-content-center">
        
                                    <!--Grid column-->
                                <div class="col-md   mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
        
                                            <!--Grid row-->
                                        <div class="row">
        
                                                <!--Grid column-->
                                            <div class="col-lg-6">
                                                <div class="md-form mb-0">
                                                    <label for="name" class="fst-italic">{!! $allcontent['form'][0] !!}</label>
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <!--Grid column-->
        
                                            <!--Grid column-->
                                            <div class="col-lg-6">
                                                <div class="md-form mb-0">
                                                    <label for="email" class="fst-italic">{!! $allcontent['form'][1] !!}</label>
                                                    <input type="text" id="email" name="email" class="form-control">
    
                                                </div>
                                            </div>
                                            <!--Grid column-->
        
                                        </div>
                                        <!--Grid row-->
        
                                        <!--Grid row-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="md-form mb-0">
                                                    <label for="subject"  class="fst-italic">{!! $allcontent['form'][2] !!}</label>
                                                    <input type="text" id="subject" name="subject" class="form-control">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->
        
                                        <!--Grid row-->
                                        <div class="row">
        
                                            <!--Grid column-->
                                            <div class="col-lg-12">
        
                                                <div class="md-form">
                                                    <label for="message" class="fst-italic">{!! $allcontent['form'][3] !!}</label>
                                                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                                           
                                                </div>
                                                    
                                            </div>
                                        </div>
                                            <!--Grid row-->
        
                                    </form>
        
                                    <div class="text-center mt-5">
                                        <a class="btn text-white ">{!! $allcontent['button-form'][0] !!}</a>
                                    </div>
                                    <div class="status"></div>
                                </div>
                                    <!--Grid column-->
                            </div>
                        </section>
                 
                </div>
                <div class="col-lg-6 img">
                    <div id="map-container-google-3  img mt-auto mb-auto " class="shadows z-depth-1-half map-container-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5010.679141224591!2d4.99505226798338!3d51.10219472524975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c148f1cfdb371f%3A0xccab4b3823f31393!2sJC%20Samurai%20Eindhout!5e0!3m2!1sfr!2sbe!4v1651184732163!5m2!1sfr!2sbe"
                            frameborder="0" style="border:0; width:100%;height:100%;" allowfullscreen></iframe>
                    </div>
                    <div class="fst-italic text-center mt-2">{!! $allcontent['location'][0] !!}</div>
                </div>
            </div>
        </div>
    </div>




@endsection