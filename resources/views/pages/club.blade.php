@extends('template')

@section('title', 'Club')

@section('main')
    <div id="values" class="container">
        <h1 class="text-center my-5">Our club values</h1>
        <p class="text-center my-5">Lorem ipsum, dolor sit amet consectetur
            adipisicing elit. Esse delectus magnam nesciunt velit suscipit culpa recusandae, temporibus amet ut corporis
            eaque praesentium quod accusantium aliquid voluptatibus dolores ad quo sint.</p>
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-4 ">
                <img src="images/limitbreak.jpg" class="align-self-center img-fluid imgshadow" alt="">
                <h4 class="mt-3">Beyond your limit</h4>
                <p class="d-none d-lg-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, culpa
                    vel impedit dolore, quia, amet magni voluptatem quis dolores vitae animi velit nulla neque
                    consequatur corporis laudantium eveniet sint autem?</p>
            </div>
            <div class="col-lg-4">
                    <img src="images/friendship.jpg" class="align-self-center img-fluid imgshadow" alt="">
                    <h4 class="mt-3">Friendship</h4>
                    <p class="d-none d-lg-block">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto
                        eum dolorum voluptates veritatis saepe aspernatur animi aliquid consectetur adipisci expedita
                        voluptate voluptatibus perferendis odit, est quia. Eos beatae aliquid labore?</p>
            </div>
            <div class="col-lg-4 ">     
                    <img src="images/handshake.jpg" class="align-self-center img-fluid imgshadow" alt="">
                    <h4 class="mt-3">Fairplay</h4>
                    <p class="d-none d-lg-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe unde
                        suscipit perferendis voluptate! Labore molestias, ut mollitia consequuntur veniam sint
                        repudiandae sed iste maxime neque inventore a ad, odio illo!</p>           
            </div>
        </div>
    </div>

    
    <div class="container-fluid" id="history" style="margin-top:15%">
        <div class="container">
            <div class="row imgtxtcenterright">

                <div class="col-lg-6 txt">
                    <article class="card h-100 justify-content-center border-0 bg-light">
                        <h1>Our History</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi?
                            Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita
                            sequi iste nostrum, cumque culpa.</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi?
                            Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita
                            sequi iste nostrum, cumque culpa.</p>
                    </article>

                </div>
                <div class="col-lg-6 img d-flex flex-wrap align-items-center">
                    <img src="images/oldmaster.jpeg" class="align-self-center img-fluid imgshadow" alt="" width="70%" style="height: 90%">
                </div>
            </div>
        </div>
    </div>

    <div id="structure" style="margin-top:3%">
        <div class="container bg-white">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 d-flex justify-content-center">
                    <img src="images/gymnase.jpg" class="align-self-center img-fluid imgshadow bg-white"
                        style="height: 90%" alt="" width="80%">
                </div>
                <div class="col-lg-5" style="margin-top: 2%;">
                    <article class="card h-100 justify-content-center border-0 bg-white">
                        <h1>Our Structure</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto ad vel molestiae nisi?
                            Vitae necessitatibus temporibus rem fugit sint accusamus neque aut nesciunt eius, expedita
                            sequi iste nostrum, cumque culpa.</p>
                        <p><img src="images/house.svg" alt="telephone" style="box-shadow: none;"></img> Somewhere</p>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div id="rules"  style="margin-top:3%;padding:2%;">
        <div class="container bg-light">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5" style="margin-top: 2%;">
                    <article class="card h-100 justify-content-center border-0 bg-light">
                        <h1>Rules of Safety</h1>
                        <ul>
                            <li>Intentionally harming an opponent is abandoned.</li>
                            <li>One cannot punch or kick his opponent.</li>
                            <li>You cannot touch the opponent’s face.</li>
                            <li>Attacking the joints other than elbows is not allowed.</li>
                            <li>Head dives are also not permitted.</li>
                            <li>Some techniques like Kawazu gake and Kami basami are not allowed.</li>
                            <li>Neither of the competitors is allowed to wear any hard metallic object during the
                                competition.</li>
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

                <!--First slide-->
                <div class="carousel-item active">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur1.jpg" alt="Card image cap"
                                    style="width: auto;  
                        height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                        Delectus labore quam laborum quisquam cum vel dicta nulla odio, repellat est
                                        perspiciatis omnis distinctio quia iusto laudantium tempore quaerat rem
                                        corrupti?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur2.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod
                                        unde magni quam illum exercitationem inventore fugiat tempora maiores! Maxime
                                        sequi sapiente libero odit necessitatibus quia ullam. Sapiente saepe dolor
                                        perspiciatis?.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur3.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Placeat doloribus, labore blanditiis veritatis dolorem eum architecto
                                        voluptates. Praesentium dicta laborum asperiores esse, expedita dolorem ea
                                        quidem iusto provident blanditiis? Ipsa?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur4.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Itaque ea repellat esse sequi illum quibusdam rerum eum aperiam, aliquam eaque
                                        dolore eius ipsam praesentium laborum commodi nobis pariatur ratione eligendi.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur3.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Accusantium est nihil laborum dicta quod labore. Veniam eius dolore accusantium
                                        ipsam id itaque animi cumque! Nam eum porro amet asperiores alias?</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur2.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos,
                                        impedit expedita? Voluptatibus, veniam inventore. Optio quibusdam similique
                                        numquam quo magnam excepturi nesciunt, recusandae non laboriosam eius deleniti
                                        maxime consequatur vel.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur1.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Asperiores laudantium eveniet, dolorem unde exercitationem error, quo
                                        perferendis ea consequatur saepe delectus distinctio aspernatur fugiat, numquam
                                        voluptatem dolor incidunt ipsam at.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur4.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                        itaque labore minus porro vel culpa cum perferendis numquam! Ab officiis
                                        mollitia deserunt nulla iure, necessitatibus aut soluta officia error iusto!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top imgshadow" src="images/entraineur3.jpg" alt="Card image cap"
                                    style="width: auto;  
                         height: 500px;">
                                <div class="card-body">
                                    <h4 class="card-title">Name Surname</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Laboriosam, porro. Earum quam voluptates aut consequatur repellat error,
                                        voluptate facere eos in! Aliquam, impedit nobis. Iusto quis praesentium
                                        reprehenderit dolore iste?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/.Third slide-->

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