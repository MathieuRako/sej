@extends('template')

@section('title', 'Judo')

@section('main')
    <div class="container">
        <div class="row imgtxtcenterleft">
            <div class="col-lg-6 d-flex flex-wrap align-items-center img">
                <img src="images/lutte1.jpg" class="align-self-center img-fluid imgshadow" alt="" width="100%">
            </div>
            <div class="col-lg-6 txt">
                <article class="card h-100 justify-content-center" style="border:0px">
                    <h1>What is Judo ?</h1>
                    <p class="grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis
                        quisquam dolorem,
                        est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea
                        temporibus dolorum voluptatum eos iusto laudantium.</p>
                    <a href="https://fr.wikipedia.org/wiki/Judo" class="btn">See more</a>
                </article>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row imgtxtcenterright">
                <div class="col-lg-6 txt">
                    <article class="card h-100 justify-content-center" style="border:0px; background:none;">
                        <h1>Jigoro Kano</h1>
                        <h5>1860 - 1938</h5>
                        <p class="grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis
                            quisquam dolorem,
                            est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea
                            temporibus dolorum voluptatum eos iusto laudantium.</p>
                        <a href="https://fr.wikipedia.org/wiki/Jigor%C5%8D_Kan%C5%8D" class="btn">See more</a>
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
                    <h1>Links</h1>
                    <p class="grey">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed reiciendis
                        quisquam dolorem,
                        est inventore at pariatur, perferendis nisi autem harum ipsum. Perferendis, voluptate ea
                        temporibus dolorum voluptatum eos iusto laudantium.</p>
                    <div class="clearfix">
                        <a href="belt.html" class="btn">Lorem ipsum</a>
                        <a href="belt.html" class="btn">Lorem ipsum</a>
                        <a href="belt.html" class="btn">Lorem ipsum</a>
                    </div>
                </article>

            </div>


        </div>
    </div>

@endsection