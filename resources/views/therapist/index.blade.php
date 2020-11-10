@extends('layouts.homelayout')

@section('title', 'Zen Body Massage')
<!--/ in case you want to write JS, write here/-->
@section('custom_js')
@parent
<!--/ in case you want to write JS, write here/-->


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


<?php
//echo '<pre>'; print_r(session('shopSessionData'));
//echo '<pre>'; print_r($Service); 
?>
<main id="main">
    <section id="services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Expert </h1>

                        <p>When the #1 provider of skin care services partners with the #1 acne brand in Australia* you get powerful results.
                            The Acne Facial Series Powered by Bookus® is now available at select Zenbody massage locations near you.  </p>
                        <!--                        <h1>{{ucwords(getBannerHeading($Banner))}} </h1>
                                                <p>{{ucwords(getBannerDesc($Banner))}}</p>-->
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="services">

        <div class="container">
            <div class="row">  
                <div class="col-md-7 col-lg-9 col-12"> 
                    <h2>Top Rated Therapist</h2>  
                </div>
            </div>  
            <div class="row">
                @if(!empty($Therapist['result']) && count($Therapist['result']))
                @foreach($Therapist['result'] as $val)
                <div class="col-lg-3">    
                    <div class="services-box">
                        <a href="{{url('therapist',[$val['_id']])}}">  <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="img-fluid"></a>
                    </div>
                    <div class="therapist-content">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start">
                            <h3>{{$val['firstName']}}</h3>
                            <a class="btn btn-brown outline" href="{{url('therapist',[$val['_id']])}}" role="button">More Info</a>
                        </div>
                        <p class="rating" style="float:none">
                            <span>{{number_format($val['rating']['star'], 1, '.',' ')}}</span>
                            {{star_count($val['rating']['star'])}} 
                        </p>
                        <p>{{!empty($val['bookedTimes'])?'Booked '.$val['bookedTimes'].' times':''}}</p>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                @endif
            </div>  
        </div>
    </section>
</main>

<!-- End #main -->

@endsection