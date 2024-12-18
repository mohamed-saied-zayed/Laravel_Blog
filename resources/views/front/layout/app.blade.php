<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{$site_data->site_name}}</title>
        <link rel="icon" type="image/x-icon" href="{{asset('front')}}/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('front')}}/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{'/'}}">{{$site_data->site_name}}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/'}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/about'}}">About</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/posts'}}">News</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/contact'}}">Contact</a></li>
                        @guest
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/login'}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/register'}}">Register</a></li>    
                        @endguest
                        @auth
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{'/logout'}}">logout</a></li>
                        @can('admin')
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('admin.dashboard')}}" target="_blank">Admin Dashboard</a></li>
                        @endcan
                        @can('writer')
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{route('writer.dashboard')}}" target="_blank">Writer Dashboard</a></li>
                        @endcan
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content');

                <!-- Footer-->
            <x-setting></x-setting>
                <!-- Bootstrap core JS-->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <!-- Core theme JS-->
                <script src="{{asset('front')}}/js/scripts.js"></script>
            </body>
        </html>