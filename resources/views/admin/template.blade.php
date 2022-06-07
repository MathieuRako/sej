<head>
    @include('head')
    <script src="https://kit.fontawesome.com/7a4fdd1fd4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/adminstyle.css') }} ">
    <link rel="stylesheet" href="{{ URL::asset('css/red-dark.css') }} ">

</head>

<body class=" fix-sidebar card-no-border">

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="fixed-top topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand text-white" href="paneel.php">United Corporation</a>

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item menu"> <a
                                class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ================x============================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <span><i class="fa-solid fa-bars"></i></span>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li><a href="/wachtwoord.php"><i class="ti-settings"></i> Wachtwoord
                                            veranderen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/actions/logout.php"><i class="fa fa-power-off"></i> Uitloggen</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(/images/provenciaal.png) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="/images/logo.png" alt="Logo" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="true">
                            <span class="caret"></span></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="/wachtwoord.php" class="dropdown-item"><i class="ti-settings"></i> Wachtwoord
                            </a>
                            <div class="dropdown-divider"></div> <a href="/actions/logout.php" class="dropdown-item"><i
                                    class="fa fa-power-off"></i> Uitloggen</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">MENU</li>
                        <li>
                            <a href ="/admin/texts">
                                <i class="fa-solid fa-align-justify"></i><span class="hide-menu">Texts</span></a>

                        </li>
                        <li>
                            <a href="/" target="_blank" aria-expanded="false"><i class="fa fa-share"></i><span
                                    class="hide-menu">Website</span></a>
                        </li>
                    </ul>
                </nav>

            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid" style="margin-top:5%">
                <div class="row page-titles">
                    <div class="col-md-5  col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">@yield('title', 'home')</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Index</a></li>

                            @for ($i = 0; $i < count($breadcrumbs); $i++)
                                <li class="breadcrumb-item {!! $i == count($breadcrumbs) - 1 ? 'active' : '' !!}">
                                    <?php
                                        $link = "";
                                        for($j=0; $j<= $i; $j++){
                                            $link = $link."/".$breadcrumbs[$j];
                                        }
                                    ?>
                                    <a href = "/admin{!!$link!!}"> {{ $breadcrumbs[$i] }}</a>
                                </li>
                            @endfor

                        </ol>
                    </div>

                </div>
                @yield('content')
            </div>
            <footer class="footer">
                Copyright © 2018 United Corporation.
            </footer>
        </div>
    </div>
    <script>
        $('.sidebartoggler').click(function() {
            if ($('.left-sidebar').width() == 240) {
                $('.navbar-brand').hide();
                $('.nav-item, menu').css('margin-left', '-25px');
            } else {
                $('.navbar-brand').show();
                $('.nav-item, menu').css('margin-left', '0px');
            }
        });
    </script>
</body>
