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


<main id="main">
    <section id="services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Services</h1>

                        <p>When the #1 provider of skin care services partners with the #1 acne brand in Australia* you get powerful results.
                            The Acne Facial Series Powered by Bookus® is now available at select Zenbody massage locations near you.  </p>
                        <!--                        <h1>{{ucwords(getBannerHeading($Banner))}} </h1>
                                                <p>{{ucwords(getBannerDesc($Banner))}} </p>-->
                    </div>
                </div>
            </div>
        </div>
    </section> 



    <section class="services">

        <div class="container">

            <div class="row">  

                <div class="col-md-7 col-lg-9 col-12"> 

                    <h2>Services</h2>  

                </div>


                <div class="col-md-5 col-lg-3 col-12"> 

                    <!--                    <div class="d-flex justify-content-center h-100">
                                            <div class="searchbar">
                                                <input class="search_input" type="text" name="" placeholder="Search...">
                                                <a href="javascript:void(0)" class="search_icon"><i class="fa fa-search"></i></a>
                                            </div>
                                        </div>-->


                </div>


            </div>  



            <div class="row">
                @if(!empty($Service) && count($Service))
                @foreach($Service['result'] as $value)
                @foreach($value as $val)

                <div class="col-md-6 col-lg-4 col-12 massage-sapce">    

                    <div class="services-box">

                        <a href="javascript:void(0)">  <img src="{{url('/images/service-image7.png')}}" class="img-fluid"></a>

                    </div>

                    <div class="services-content">

                        <h3>{{!empty($val['name'])?$val['name']:''}}</h3>
                        <p class="booked">{{!empty($val['bookedTimes'])?'Booked '.$val['bookedTimes'].' times':'no data'}} </p> 
                    </div>

                </div>
                @endforeach
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