<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
        
        <!-- Favicons -->
        <link href="{{ url('images/favicon.png') }}" rel="icon">
        <link href="{{ url('images/apple-touch-icon.png') }}" rel="apple-touch-icon"> 
        
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,500i,600,700,800,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Vendor CSS Files -->
        <link href="{{ url('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ url('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ url('vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ url('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ url('vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ url('css/custom.css') }}" rel="stylesheet">

        <!-- Media Query -->
        <link href="{{ url('css/media-query.css') }}" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ url('vendor/bootstrap-4.5.3/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="{{ url('vendor/bootstrap/js/jquery-3.5.1.slim.min.js') }}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="{{ url('vendor/bootstrap-4.5.3/js/bootstrap.bundle.min.js') }}"></script>
        
        <!-- Fontawsome -->
        <script src="https://kit.fontawesome.com/76adce73d4.js" crossorigin="anonymous"></script>
        
        <!-- Main CSS File -->
        <link href="{{url('/css/style.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!--//-->
        @section('custom_css')
        <!--/ Custome CSS will be pasted here /-->
        @show
        <!--//-->
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex">
                <div class="logo mr-auto">
                    <a href="{{url('/')}}"><img src="{{url('/images/logo.png')}}" alt="" class="img-fluid"></a>
                </div>
                @include('layouts/menu_bar')
            </div>
        </header>
        <!-- End Header -->

        @yield('content')
        <!--/ 
        
        
        View  
        
        
        
        /-->

        <!-- Widget -->
        <!-- End #main -->
        @include('layouts/widget-1')
        @include('layouts/footer')
        <!-- Vendor JS Files -->
        <script src="{{url('/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{url('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{url('/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{url('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{url('/vendor/venobox/venobox.min.js')}}"></script>
        <script src="{{url('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{url('/vendor/aos/aos.js')}}"></script>
        <!-- Template Main JS File -->
        <script src="{{url('/js/main.js')}}"></script>
        <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEAx4pDA9NsDV5Av2_cgRr_Cl6mw862x8&callback=myMap"></script>-->

        <!--//-->
        @section('custom_js')

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

<script>
var myarray = [];
    $(document).ready(function () {
        $.ajax({
        url: "{{url('/getLatLng')}}",
        type: 'GET',
        dataType: 'json',
        success: function (res) {
            $.each(res.result, function(key,val) {
                myarray.push(val.geo_location.coordinates);
            });
        }
    });
});

//var locations =myarray;
//console.log(locations);

var locations = [
  [-30.7455019, 121.474213],
  [-33.6494385, 115.344612],
  [-32.5344495, 115.7257788],
];
//     [-30.7454974, 121.4720243],
//     [-33.6490942, 115.3433551],
//     [-32.5344803, 115.7235896]
// ];

//var locations =myarray;
//var locations=myarray;

var map;
var markerArr = [];

function initMap() {

var myLatLng = {lat: -32.74, lng: 115.72};

var mapProp= {
    center: myLatLng,
    zoom: 5,
};

map = new google.maps.Map(document.getElementById('map'), mapProp);

for (i = 0; i < locations.length; i++) {  
    console.log(locations[i]);
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][0], locations[i][1]),
        map: map,
        title: locations[i][0]
    });
    markerArr.push(marker);
}
}

function jumpToMarker(cnt){
    map.panTo(markerArr[cnt].getPosition());
    map.setZoom(15);
}

//	function initMap() {
//            
//		var mapOptions = {
//			zoom: 8,
//			center: new google.maps.LatLng(37.5, -122),
//			mapTypeId: 'roadmap'
//		};
//		var map = new google.maps.Map(document.getElementById('map'), mapOptions);
//	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsKtyjwdGFWNdUML_0lXGph-6PaRNG7vE&callback=initMap">
</script>


<script>
if (localStorage.getItem("user_lat") != '' && localStorage.getItem("user_lat") != null) {

    $.ajax({
        url: "{{url('/set_session')}}",
        type: 'GET',
        data: {
            user_lat: localStorage.getItem("user_lat"),
            user_lang: localStorage.getItem("user_lang")
        },
        success: function ($res) {
            console.log('done')
        }
    });
}else{
    


$(document).ready(function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    }else{
        alert('"Geolocation is not supported by this browser."');
    }
});

function showPosition(position) {
    console.log(position);
    
    localStorage.setItem("user_lat", position.coords.latitude);
    localStorage.setItem("user_long", position.coords.longitude);

    $.ajax({
        url: "{{url('/set_session')}}",
        type: 'GET',
        data: {
            user_lat: position.coords.latitude,
            user_long: position.coords.longitude
        },
        success: function (data) {
            console.log('success');
        }
    });

}
}
        </script>

        <!--/ Custome Js /-->
        @show
    </body>
</html>
