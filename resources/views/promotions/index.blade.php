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

<!-- ======= Hero Section ======= -->
<main id="main">
    <section id="promotion">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Loyalty Point Program </h1>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>


                    </div>
                </div>
            </div>
        </div>


    </section> 



    <section class="promotion-inner">
        <div class="container">
            <div class="row">   
                <div class="col-lg-10 col-md-12 offset-lg-1 text-center">       
                    <img src="{{url('/images/promotion/loyalty.png')}}" class="img-fluid">
                </div> 
            </div> 
        </div> 
    </section>



    <section class="healthfund-inner">
        <div class="container">
            <div class="row">
                  @if(!empty($json) && count($json))
                @foreach($json['promotions'] as $promotions_data)
                <div class="col-lg-6 col-md-6">       
                    
                    <img src="{{url($promotions_data['image'])}}" class="img-fluid offer-img">
                </div>
                
                @endforeach
 @endif
            </div>
        </div>            
    </section>
</main>

<!-- End #main -->



@endsection