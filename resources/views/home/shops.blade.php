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
                        <h1>Shops</h1>

                        <p></p>
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
                <div class="col-12 flex-header"> 
                    <h2>Shops </h2>  
                    <a class="btn btn-brown" href="{{url('/mapList')}}" role="button">Open Shop Map</a>
                </div>
            </div>  

            <div class="row all-shops">
                @if(!empty($Shops['result']) && count($Shops['result']))
                @foreach($Shops['result'] as $val)
                <div class="col-lg-4">    
                    <div class="services-box">
                       <a href="{{url('/shop',$val['_id'])}}"> <img src="{{url('/shopimage.png')}}" class="img-fluid"></a>
                    </div>

                    <div class="services-content">
                        <h3>{{!empty($val['name'])?$val['name']:''}}</h3>
                        <p>
                            <span class="txt-rate">{{number_format($val['rating']['star'], 1, '.',' ')}}</span>
                            {{star_count($val['rating']['star'])}}
                            <span class="txt-rate">{{!empty($val['rating']['count'])?'('.$val['rating']['count'].')':''}}</span>
                        </p>
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