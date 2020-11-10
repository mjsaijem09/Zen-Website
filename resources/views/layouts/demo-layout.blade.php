<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Kamlesh Jha">
        <meta name="generator" content="">
        <title>{{ env('APP_NAME') }} - @yield('title')</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <!-- twitter card starts from here, if you don't need remove this section -->
        <!-- <meta name="twitter:card" content=""/> -->
        <meta name="twitter:site" content=""/>
        <meta name="twitter:url" content=""/>
        <meta name="twitter:title" content=""/>
        <!-- maximum 140 char -->

        <meta name="twitter:description" content=""/>

        <!-- maximum 140 char -->

        <meta name="twitter:image" content=""/>

        <!-- when you post this page url in twitter , this image will be shown -->
        <!-- twitter card ends from here -->

        <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->

        <meta property="og:title" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:locale" content="en_IN"/>
        <meta property="og:site_name" content=""/>

        <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->

        <meta property="og:type" content="website"/>
        <meta property="og:image" content=""/>

        <!-- when you post this page url in facebook , this image will be shown -->
        <!-- facebook open graph ends from here -->

        <link rel="canonical" href="{{ url('/') }}">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="https://getbootstrap.com/docs/4.4/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="https://getbootstrap.com/docs/4.4/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">

        <!--//-->
        @section('custom_css')
        
        <!--<link rel="icon" href=" {{ asset('css/style.css') }}">-->
        
       
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!--/ Custome CSS will be pasted here /-->
        @show
        <!--//-->
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">{{ env('APP_NAME') }}</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="{{url('/all_therapist')}}">Therapist</a>
                <a class="p-2 text-dark" href="{{url('/all_services')}}">Services</a>
                <a class="p-2 text-dark" href="javascript:void(0)">Gift Card</a>
                <a class="p-2 text-dark" href="javascript:void(0)">Promotions</a>
                <a class="p-2 text-dark" href="javascript:void(0)">Health Fund</a>
                <a class="p-2 text-dark" href="javascript:void(0)">Blog</a>
                <a class="p-2 text-dark" href="javascript:void(0)">Careers</a>
            </nav>
           
        </div>
       
        @section('sidebar')
        <!--/ Paste Your Sidebar Here /-->
        @show
        <!--//-->
        <div class="container">
            @yield('content')
            <!--/ 
            
            
            View  
            
            
            
            /-->
        </div>
        <!--/ Footer /-->
        <div class="container">
            <footer class="pt-4 my-md-5 pt-md-5 border-top">
                <div class="row">
                    <div class="col-12 col-md">
                        <img class="mb-2" src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Features</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="javascript:void(0)">Cool stuff</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Random feature</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Team feature</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Stuff for developers</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Another one</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Last time</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>Resources</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="javascript:void(0)">Resource</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Resource name</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Another resource</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Final resource</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md">
                        <h5>About</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="javascript:void(0)">Team</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Locations</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Privacy</a></li>
                            <li><a class="text-muted" href="javascript:void(0)">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--//-->
    @section('custom_js')
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEAx4pDA9NsDV5Av2_cgRr_Cl6mw862x8&callback=myMap"></script>
    <link rel="icon" href=" {{ asset('js/main.js') }}">
 
  
    <!--/ Custome Js /-->
    @show
</html>
