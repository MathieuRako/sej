<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('icons')
    <!-- link css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }} ">
    <!-- noindex -->
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

    <!-- Lien pour le carousel des sponsors (A VOIR SI FAISABLE AVEC LE CSS EN LOCAL)-->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


</head>

<body>
    <header>
        {{-- navigation bar --}}
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/home">
                    <img src="images/logo.png" class="d-inline-block align-self-center mx-1 " width="50" height="50"
                        alt="" style="box-shadow:none;">
                    <span class="align-self-center" id="title"> {{ implode(' ', $name) }} </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav " id="navigation">
                        <a class="nav-item nav-link {{ Request::is('home') ? 'active' : '' }}" href="/home">HOME</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('club') ? 'active' : '' }}" href="club"
                                id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                CLUB
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="club#values">Values</a>
                                <a class="dropdown-item" href="club#history">History </a>
                                <a class="dropdown-item" href="club#structure">Structure</a>
                                <a class="dropdown-item" href="club#rules">Rules</a>
                                <a class="dropdown-item" href="club#trainers">Trainers</a>
                            </div>
                        </div>
                        <a class="nav-item nav-link {{ Request::is('judo') ? 'active' : '' }}" href="judo">JUDO</a>
                        <a class="nav-item nav-link {{ Request::is('belts') ? 'active' : '' }}"
                            href="belts">BELTS/GRADEN</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Request::is('informations') ? 'active' : '' }}"
                                href="informations" id="navbarDropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                INFORMATIONS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="informations#traininghours">Training hours </a>
                                <a class="dropdown-item" href="informations#location">Location</a>

                                <a class="dropdown-item" href="informations#ranking">Ranking</a>
                            </div>
                        </div>
                        <a class="nav-item nav-link {{ Request::is('sponsors') ? 'active' : '' }}"
                            href="sponsors">SPONSORS</a>

                        <div style="margin-top:auto; margin-bottom:auto; ">
                            <div><a id="btncontact" class="btn" href="contact">CONTACT</a></div>
                        </div>




                    </div>
                </div>



            </div>

        </nav>

        {{-- title (and subtitle) --}}
        <div class="p-5 text-center bg-image" style="
          background-image: linear-gradient(
        rgba(53, 76, 116, 0.4),
        rgba(28, 36, 81, 0.4)
      ),url('images/banniereFullscreen.jpg');
          background-position: center;
          background-size:cover;
          height:400px;
                
          width:auto;
        ">
            <div class="d-flex justify-content-center align-items-center h-100" style="margin-top:2%;">
                <div class="text-white" style=" text-shadow: black 1px 0 10px;
                    ">
                    <h1>@yield('title', 'Judoclub Samurai Eindhout, voor jong en oud')
                    </h1>
                    @yield('subtitle')
                </div>
            </div>

        </div>


    </header>
    <main>
        @yield('main', 'Page under construction ...')
    </main>
    <footer class="bg-dark text-center text-white">

        {{-- sponsors-carousel --}}
        @if (Route::currentRouteName() != 'sponsors')
            <section id="sponsors-carousel" class="pt-5 pb-1 bg-white d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">

                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor1.png">

                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor2.png">

                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor1.png">

                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor2.png">

                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor5.png">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row">

                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor4.png">

                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor2.png">

                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor6.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor1.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor3.png">


                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="images/sponsor5.png">


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        @endif
        <div class="container p-4">
            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    {!! implode(' ', $footer[0]) !!}
                </p>
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase"> {!! implode(' ', $footer[1]) !!}</h5>

                        <p> {!! implode(' ', $footer[2]) !!} </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase">
                        </h6>
                        <p><img src="images/house.svg" alt="telephone"></img>{!! implode(' ', $footer[3]) !!}
                        </p>
                        <p><img src="images/envelope.svg" alt="telephone"></img> {!! implode(' ', $footer[4]) !!}</p>
                        <p><img src="images/telephone.svg" alt="telephone"></img> {!! implode(' ', $footer[5]) !!}</p>
                        <a class="text-white" href="{{ implode(' ', $footer[6]) }}"><img src="images/facebook.svg" alt="telephone">
                            {!! implode(' ', $footer[7]) !!}</img></a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p> {!! implode(' ', $footer[8]) !!}</p>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>
