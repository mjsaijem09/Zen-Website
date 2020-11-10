@extends('layouts.homelayout')
@section('title', 'Zen Body Massage')
<!--/ in case you want to write JS, write here/-->
@section('custom_js')
@parent
<!--/ in case you want to write JS, write here/-->

<script>
    $(document).ready(function () {
        $("#owl").owlCarousel({
            navigation: false,
            slideSpeed: 100,
            paginationSpeed: 800,
            singleItem: true,
            autoPlay: true
        });
    });

</script>


<!--/ in case you want to write JS, write here/-->
@endsection


@section('custom_css')
@parent
<!--/ in case you want to write CSS, write here/-->




<!--/ in case you want to write CSS, write here/-->
@endsection
@section('sidebar')
@parent
<!--/ in case you want add something to Sidebar, write here/-->



<!--/ in case you want add something to Sidebar, write here/-->
@endsection

@section('content')

<!-- ======= Hero Section ======= -->
<section class="video-sec">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="zen-video.mp4" type="video/mp4">
        <source src="zen-video.webm" type="video/webm" />
        <source src="zen-video.mov" type="video/mov" />
    </video>
    <div class="container h-100">
        <div class="row">
            <div class="col-lg-12 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1>Book a Relaxing massage near you </h1>
                    <p>When the #1 provider of skin care services partners with the #1 acne brand in Australia* you get powerful results.
                        The Acne Facial Series Powered by Bookus® is now available at select Zenbody massage locations near you.  </p>
                    <!--                    <h1>{{ucwords(getBannerHeading($Banner))}} </h1>
                                        <p>{{ucwords(getBannerDesc($Banner))}}
                                        </p>-->
                    <a href="https://play.google.com/store/apps/details?id=com.massage_now_user" class="btn-get-started" target="_blank">Book Massage</a>
                </div>
            </div>
        </div>
    </div>
</section>

<main id="main custom">
    <!-- ======= Select Shop ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row select-shop">
                <div class="col-12 flex-header" >
                    <h2>Select Shop</h2>
                    <a class="btn btn-brown" href="{{url('/mapList')}}" role="button">Open Shop Map</a>
                </div>
            </div>
            <div class="row" id="shoplist">
                @if(!empty($Shops['result']) && count($Shops['result']))
                @foreach($Shops['result'] as $val)
                <div class="col-lg-3">    
                    <div class="shop_block rounded-bottom">
                        <a href="{{url('/shop',$val['_id'])}}">
                            <figure><img src="{{url('/images/shop-images/kalgoorlie.jpg')}}"></figure>
                        </a>
                        <div class="bottom_content-2">
                            <a href="javascript:void(0)">  <h4>{{!empty($val['city'])?$val['city']:''}}</h4></a>   
                            <div style="display: flex; justify-content: space-between;">
                                <div>
                                    <span class="txt-rate">{{number_format($val['rating']['star'], 1, '.',' ')}}</span>
                                    {{star_count($val['rating']['star'])}}
                                    <span class="txt-rate">{{!empty($val['rating']['count'])?'('.$val['rating']['count'].')':''}}</span>
                                </div>
                                <span class="distan">{{ round(get_estimated_distance_time(session('user_lat'), session('user_long'), $val['geo_location']['coordinates'][1], $val['geo_location']['coordinates'][0])) }} Km</span>
                            </div>
                        </div>     
                    </div> 
                </div>
                @endforeach
                @else
                <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                @endif
            </div>
        </div>
    </section>
    <!-- End Select Shop -->
    <div class="shop-botom-area"></div>
    <!--<div id="googleMap" style="width:100%;height:400px;" ></div>-->

    <!-- ======= Card Section ======= -->
<!--    <section id="gift-card" class="gift-card">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h2>Gift Card</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 text-center">
                    <img src="{{url('/images/step1.png')}}" class="img-fluid" width="200px"> 
                    <h4>Step 1</h4>
                    <p>Write a Letter</p>
                </div>
                <div class="col-md-4 col-lg-4 text-center">
                    <img src="{{url('/images/step2.png')}}" class="img-fluid" width="200px">
                    <h4>Step 2</h4>
                    <p>Pay it online</p>
                </div>
                <div class="col-md-4 col-lg-4 text-center">
                    <img src="{{url('/images/step3.png')}}" class="img-fluid" width="200px">
                    <h4>Step 3</h4>
                    <p>We post it to your appointed address</p>
                </div>
            </div>
            <div class="row">


                <div class="col-md-8 col-lg-4 offset-lg-4 offset-md-2 text-center"> 

                    <a href="javascript:void(0)" class="btn">Purchase a Gift Card</a>
                </div>




            </div>
        </div>
    </section>-->
    <!-- End Services Section -->
    <section id="therapies">
        <div class="therapist-cont">
            <div class="row" style="margin: 0; padding: 0 80px;">     
                <div class="col-md-12 col-lg-12"> 
                    <h2>Top Rated Therapists</h2>  
                </div>
            </div>
            <div class="therapist-inner-cont">
                <div class="row custom-therapist-container">
                    @if(!empty($topRatedTherapist['result']) && count($topRatedTherapist['result']))
                    <?php
                        $keys = array_map(function($val){
                            $bookedTimes = @$val['bookedTimes'] ? $val['bookedTimes'] : 0 ;
                            return $bookedTimes*-1;
                        }, $topRatedTherapist['result'] );
                        array_multisort($keys, $topRatedTherapist['result']);
                        $i = 0;
                    
                        foreach($topRatedTherapist['result'] as $key=>$val):
                            if($i >= 3) {break;}else{?>
                    <div class="col-md-6 col-lg-3"> 
                        <div class="ther_block custom-therapist-icon">
                            <a href="{{url('therapist',[$val['_id']])}}">
                                    <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" width="100%">
                            </a>
                        </div> 
                        <div class="ther_block-cont custom-therapist-minimal-info">
                            <div style="display: flex; justify-content: space-between">
                                <h4 class="custom-therapist-name">{{!empty($val['firstName'])?$val['firstName']:''}}</h4>
                                <a class="btn btn-primary custom-therapist-book-btn" href="{{url('therapist',[$val['_id']])}}" role="button">More Info</a>
                            </div>
                            
                            <h5></h5>  
                            <p><span class="txt-rate">{{number_format($val['rating']['star'], 1, '.',' ')}}</span>
                                {{star_count($val['rating']['star'])}}
                                <span class="txt-rate">{{!empty($val['rating']['count'])?'('.$val['rating']['count'].')':''}}</span>
                            </p>
                            <p>{{!empty($val['bookedTimes'])?'Booked '.$val['bookedTimes'].' times':''}}</p>
                        </div>
                    </div>
                
                    <?php $i++; } endforeach;?> 
                    
                    @else
                    <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                    @endif

                    <div class="col-md-6 col-lg-3 text-center"> 
                        <a href="{{url('therapist')}}" class="btn">View all <i class="fa fa-long-arrow-right" aria-hidden="true" style="margin-left: 15px;"></i></a>
                    </div>
                </div>
            </div>
            <div class="bg-bottom"></div>
        </div> 
        <div class="container most">
            <div class="row">     
                <div class="col-md-12 col-lg-12"> 
                    <h2>Most Booked Services </h2>  
                </div>
            </div>
            <div class="row">
                @if(!empty($mostBooked) && count($mostBooked))
                @foreach($mostBooked['result'] as $key=>$booked)
                <div class="col-md-6 col-lg-3 text-center"> 
                    <div class="">
                        <a href="javascript:void(0)">
                            <img src="{{url('/images/booked_services3.png')}}" width="100%">
                        </a>
                    </div> 
                    <div class="service-info">
                        <h5 class="bookk2">{{!empty($booked['name'])?$booked['name']:''}}</h5>
                        <h6 class="bokk"> {{!empty($booked['services'][0]['bookedTimes'])?'Booked '.$booked['services'][0]['bookedTimes'].' times':''}} </h6>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                @endif
            </div>
        </div> 
    </section>
<!--    <section id="testi">
        <div class="container">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     Carousel indicators 
                    <ol class="carousel-indicators">

                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>   
                     Wrapper for carousel items 
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="row">
                                @if(!empty($Review['result']) && count($Review['result']))
                               
                                @foreach($Review['result'] as $val)
                                    <?php //echo '<pre>'; print_r($val);  ?>
                                <div class="col-sm-6">
                                    <div class="testimonial-wrapper">
                                        <div class="testimonial">{{$val['review']}}</div>
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <img src="{{url('/images/image_review.png')}}">                                     
                                            </div>
                                            <div class="media-body">
                                                <div class="overview">
                                                    <div class="name"> {{!empty($val['customerId']['userName'])?$val['customerId']['userName']:''}} </div>
                                                    <div class="details">CEO MNC Company</div>

                                                </div>                                      
                                            </div>
                                        </div>
                                    </div>                              
                                </div>
                                @endforeach
                                @else 
                                <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                                @endif
                            </div>          
                        </div>
                    </div>
                </div>
            </div>    
        </div>  

    </section>-->
    <!-- ======= Contact Us Section ======= -->
<!--    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Blog</h2>
            </div>
            <div class="row">
                @if(!empty($Blog) && count($Blog)>0)
                @foreach($Blog['result'] as $val)

                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="slater_block">
                        <a href="javascript:void(0)" target="_blank">
                            <figure>
                                <img src="{{url('/images/blog_image.png')}}">
                            </figure>
                            <div class="bottom_content">
                                <h4>
                                    {{ucwords($val['heading'])}}
                                </h4>

                                <p class="ourwork"> {{change_format($val['createdAt'])}}</p>
                                <p>
                                    {{$val['content']}}
                                </p>
                                <div class="icon float-left"><img src="{{url('/images/image_review.png')}}"></div>
                                <div class="float-left bloger-name">By Luke Chan</div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                @endif


            </div>
        </div>
    </section>-->
    <!-- End Contact Us Section -->
    
</main>

<script>
    function myMap() {
        var myLatLng = {lat: 28.5355, lng: 77.3910};
        var map = new google.maps.Map(document.getElementById('googleMap'), {
            zoom: 4,
            center: myLatLng
        });
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }

</script>
<script>
window.onload = function passLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(bindPosition);
  } else { 
    y.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function bindPosition(position) {
  $.ajax({
    url: "/getlocation",
    type: "POST",
    dataType: "json",
    data: { 
      "_token": "{{ csrf_token() }}",
      lat: position.coords.latitude, 
      long: position.coords.longitude
    },
    success: function(data){
        console.log(data);
    },
    error: function(response){
        console.log("error:"+response);
    }
  })
}
</script>

@endsection