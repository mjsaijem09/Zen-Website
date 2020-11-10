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
    <section id="health-fund">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Health Fund Rebate </h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="healthfund-inner">
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 col-md-12"> 
                     <!--  @if(!empty($json) && count($json))
                @foreach($json['healthfund'] as $healthfund_data)
                <p><strong>{{$healthfund_data['title']}}.</strong> {{$healthfund_data['description']}}</p>   
                @endforeach
            @endif -->
             <p> <strong>Please read carefully if you want to claim your health fund.</strong></p>
            <p><strong> 1. </strong>Only Remedial Massage can be claimed at our business. Other services are not covered at this moment.</p>

            <p><strong> 2. </strong> Not all the Health Insurance companies are accepted, so please mention your insurance company before book your massage to check whether you are eligible. The situation is varies day to day because our registered massage therapist could move in between different branches.</p>


            <p><strong> 3. </strong>  Due to the fact that not everyone registers with Hicaps, we need to arrange your booking with right person. Walk-in customers may have a chance that cannot receive rebate.</p>

            <p><strong> 4. </strong> We do not provide rebate quote service. If you are wondering how much you can rebate from your insurance company, please contact them before having your massage. In the case of refuse to pay because the high gap amount is not allowed.</p>
                  </div> 
            </div> 
        </div> 
    </section>
    <section class="healthfund-inner">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-12 col-md-12 text-center">    
                    <h2>HICAPS Available All Major Health Insurances</h2>
                    <h4><em>Booking Essential / No Discount Apply / No Gift Cards Redeemed</em></h4>
                </div> 
            </div> 
            <div class="row top-space">
                <div class="col-lg-4 col-md-12 lft">          
                    <img src="{{url('/images/health/hicaps-logo.png')}}" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-12">          

                    <img src="{{url('/images/health/logos.png')}}" class="img-fluid">
                </div>      
            </div>
        </div>            
    </section>
</main>

<!-- End #main -->
@endsection