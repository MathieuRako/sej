@extends('template')

@section('title', 'Belts/Graden')



@section('main')

    <div class="container d-flex justify-content-center">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 d-flex justify-content-center">
                <img src="images/explicationCeinture.jpg" class="align-self-center img-fluid imgshadow bg-light"
                    style="height: 90%" alt="" width="80%">
            </div>
            <div class="col-lg-5" style="margin-top: 2%;">
                <article class="card h-100 justify-content-center border-0" style="border:0px">
                    <h1>Our History</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi?
                        Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita
                        sequi iste nostrum, cumque culpa.</p>

                </article>
            </div>

        </div>
    </div>


    <div class="container-fluid p-5 bg-light" id="imgtxtlarge">
        <div class="row d-flex justify-content-around">



            <div class="col-lg-4">
                <article class="text-center bg-light card h-100 justify-content-center" style="border:0px;">
                    <h1>More details</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi?
                        Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita
                        sequi iste nostrum, cumque culpa.</p>
                </article>
            </div>
            <div class="col-lg-5">
                <div class="embed-responsive embed-responsive-16by9 shadow p-3 mb-5 bg-light rounded"
                    style="margin-top:2%;">
                    <iframe class="" width="200" height="150" src="https://www.youtube.com/embed/1UDmiCaJe9Y"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
