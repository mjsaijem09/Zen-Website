@extends('layouts.homelayout')
@section('title', 'Zen Body Massage')
<!--/ in case you want to write JS, write here/-->
@section('custom_js')
@parent
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

<main id="main" class="custom">
    <section id="shop-details">
        <div class="custom-container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="custom carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{url('/images/shop-images/kalgoorlie1.jpg')}}" alt="First slide" style="height:480px; width:900px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{url('/images/shop-images/kalgoorlie.jpg')}}" alt="Second slide" style="height:480px; width:900px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{url('/images/shop-images/kalgoorlie2.jpg')}}" alt="Third slide" style="height:480px; width:900px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{url('/images/shop-images/kalgoorlie3.jpg')}}" alt="Forth slide" style="height:480px; width:900px;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="{{url('/images/shop-images/kalgoorlie.jpg')}}" style="height:480px; width:900px;" class="img-fluid rounded">          
                        <div class="carousel-caption d-none d-md-block">
                            <h5>...</h5>
                            <p>...</p>
                        </div>
                    </div> -->
                </div>
                @if(!empty($Shops['result']) && count($Shops['result']))
                @foreach($Shops['result'] as $val)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="shop-information">
                        
                        <h2>{{!empty($val['name'])?ucwords($val['name']):''}}</h2>

                        <div class="row">   
                            <div class="col-lg-1 col-md-1 col-1">    
                                <i class="icofont-location-pin"></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">    
                                <p><a href="http://127.0.0.1:8000/mapList">{{!empty($val['street'])?$val['street']:''}} {{!empty($val['city'])?$val['city']:''}}.</a></p>
                            </div>
                        </div>

                        <div class="row">   
                            @if(!empty($val['phone']))
                            <div class="col-lg-1 col-md-1 col-1">    
                                <i class="bx bx-phone"></i>
                            </div>
                            @endif
                            <div class="col-lg-10 col-md-10 col-10">    
                                <p><a href="tel:<?php echo !empty($val['phone'])?$val['phone']:'' ?>">{{!empty($val['phone'])?$val['phone']:''}}</a></p>
                            </div>
                        </div> 

                        <div class="row">   
                            <div class="col-lg-1 col-md-1 col-1">    
                                <i class='bx bx-envelope'></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">    
                                <p><a href="mailto:<?php echo !empty($val['email'])?$val['email']:'' ?>">{{!empty($val['email'])?$val['email']:''}}</a></p>
                            </div>
                        </div> 

                        <div class="row">   
                            <div class="col-lg-1 col-md-1 col-1">    
                                <i class='bx bx-time'></i>
                            </div>
                            <div class="col-lg-10 col-md-10 col-10">    
                                <p>  {{$open_hour}}</p>
                            </div>
                        </div> 
                        <p></p>
                        <a href="{{url('/BookAppointment',$val['_id'])}}" class="btn btn-block">Book Now</a>
                    </div>       
                </div>
                @endforeach 
                @else
                <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                @endif
            </div>
<!-- TOP THERAPIST ------------------------------------------------------------------------------------------------------->
            <div class="row top-space">
                @if(!empty($Shops['result']) && count($Shops['result']))
                @foreach($Shops['result'] as $val)
                <div class="col-lg-12 col-md-12">
                    <h2 class="top-title">Top Services in {{!empty($val['city'])?$val['city']:''}}</h2> 
                </div>    
                @endforeach 
                @else
                <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                @endif
            </div>   

            <div class="row">
                <div class="col-lg-9 col-md-12">

                    <div class="row">
                    
                        @if(!empty($Service) && count($Service))
                        
                        @foreach($Service['result'] as $value)
                        <?php
                            usort( $value, function ( $a, $b )
                            {
                            return $b['bookedTimes'] <=> $a['bookedTimes'];
                            });
                        ?>
                        @foreach($value as $val)
                        
                        <div class="col-lg-3 col-md-3 col-6">
                            <img src="{{url('/images/booked_services3.png')}}" class="img-fluid">
                            <h6 class="service-title">{{!empty($val['name'])?$val['name']:'no data'}}</h6>
                            <p class="booked-times">{{!empty($val['bookedTimes'])?'Booked '.$val['bookedTimes'].' times':'no data'}}</p>
                        </div> 

                        @endforeach
                        @endforeach
                        @else
                        <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                        @endif
                    </div>  
<!-- THERAPIST ----------------------------------------------------------------------------------------------------------->
                    <div class="row top-space">
                        @if(!empty($Shops['result']) && count($Shops['result']))
                        @foreach($Shops['result'] as $val)
                        <div class="col-md-12 col-lg-12" style="padding-bottom: 20px;"> 
                            <h2 class="top-title">Top Therapists in {{!empty($val['city'])?$val['city']:''}}</h2> 
                        </div>
                        @endforeach 
                        @else
                        <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                        @endif
                        @if(!empty($Therapist['result']) && count($Therapist['result']))
                        <?php
                            $keys = array_map(function($val){
                                $bookedTimes = @$val['bookedTimes'] ? $val['bookedTimes'] : 0 ;
                                return $bookedTimes*-1;
                            }, $Therapist['result'] );
                            array_multisort($keys, $Therapist['result']);
                        ?>
                        @foreach($Therapist['result'] as $val)
                        <div class="col-md-6 col-lg-3"> 
                            <div class="ther_block">
                                <a href="{{url('therapist',[$val['_id']])}}">
                                    <figure>
                                        <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="img-fluid rounded">
                                    </figure>
                                </a>
                            </div> 
                            <div class="ther_block-cont">
                                <h4>{{ucwords($val['firstName'])}} {{ucwords($val['lastName'])}}</h4>
                                <p>
                                    <span>{{number_format($val['rating']['star'], 1, '.',' ')}}</span>
                                    {{star_count($val['rating']['star'])}}
                                    <span>{{$val['rating']['count']}}</span>
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
<!-- Card Payment -------------------------------------------------------------------------------------------------------->
                <div class="col-lg-3">
                    @if(!empty($Shops['result']) && count($Shops['result']))
                        @foreach($Shops['result'] as $value)
                            @foreach($value['facilities'] as $val)
                            <div class="service-features">
                                <h3 class="feature-title">{{!empty($val['name'])?$val['name']:''}}</h3> 
                                <span class="feature-item"><i class="icofont-check-circled"></i> {{!empty($val['name'])?$val['name']:''}}</span>
                            </div>
                            @endforeach
                           
                    <!--                    <div class="pay-opt">

                                            <h5>Payment: Card/Cash </h5>


                                        </div> 


                                        <div class="pay-opt-2">

                                            <h5>Booking: Walking/Booking </h5>


                                        </div> 


                                        <ul class="about-zenlist">

                                            <li><i class="icofont-clock-time"></i> Open 9:00am - 6:00pm </li> 


                                        </ul>-->

                        @endforeach
                    @endif
                </div> 
            </div>
        </div>
    </section>


    <!-- End Contact Us Section -->


<!--    <section id="call-to-action" class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">


                    <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-2" data-slide-to="1"></li>
                            <li data-target="#carousel-2" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">

                            <div class="carousel-item active w-100 text-white">

                                <div>
                                    <h2 class="offer-h">Avail 15% Discount</h2>
                                    <p class="offer-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,<br> varius quam at, luctus dui.</p>
                                    <a href="javascript:void(0)" class="btn offer-cta-btn">Code: First15</a>
                                </div>



                            </div>
                             /.carousel-item 


                            <div class="carousel-item w-100 text-white">
                                <div>
                                    <h2 class="offer-h">Avail 20% Discount</h2>
                                    <p class="offer-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,<br> varius quam at, luctus dui.</p>
                                    <a href="javascript:void(0)" class="btn offer-cta-btn">Code: First20</a>
                                </div>


                            </div>
                             /.carousel-item 
                            <div class="carousel-item w-100 text-white">

                                <div>
                                    <h2 class="offer-h">Avail 30% Discount</h2>
                                    <p class="offer-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,<br> varius quam at, luctus dui.</p>
                                    <a href="javascript:void(0)" class="btn offer-cta-btn">Code: First30</a>
                                </div>


                            </div>
                             /.carousel-item 
                        </div>
                         /.carousel-inner 
                        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                     /.carousel 
                </div>
            </div>
        </div>
    </section>-->



<!--    <section id="review-sec">
        <div class="container">
            <div class="row">  
                <div class="col-lg-12 col-md-12">       
                    <h2 class="top-title">Review of Our Spa</h2>
                </div>


                <div class="col-lg-12 col-md-12">  
                    <div class="review-area">

                        <div class="row">   
                            @if(!empty($Review['result']) && count($Review['result']))
                                @foreach($Review['result'] as $val)     

                                <div class="col-lg-9 col-md-8">  

                                    <p>{{!empty($val['Review'])?$val['Review']:''}}</p>

                                    <div class="media">
                                        <div class="media-left d-flex mr-3">
                                            <img src="{{url('/images/image_review.png')}}">										
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"> {{!empty($val['customerId']['userName'])?$val['customerId']['userName']:''}} </div>
                                                <div class="details">{{getDateFrom($val['createdAt'])}}</div>										

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-md-4">  

                                    <p class="rating">
                                        {{star_count($val['star'])}}


                                    </p>


                                </div>    

                                @endforeach
                            @else
                            <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
                            @endif

                        </div>
 </div>

                </div>
 </div>
 <div class="row">

                <div class="col-lg-12 col-md-12">  

                    <h2 class="top-title">Our Location</h2>    


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28030.563687813486!2d77.3347877939349!3d28.57515354326286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce45a25555555%3A0x83a27490bba534a7!2sAndroid%2C%20iOS%20and%20iPhone%20App%20Development%20company%20in%20Noida%20-%20Parangat%20Technologies!5e0!3m2!1sen!2sin!4v1585723513293!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


                </div>

            </div>


        </div>           

    </section>       -->
</main>

<!-- End #main -->
@endsection
