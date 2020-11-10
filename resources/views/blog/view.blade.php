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
    <section class="blog-information">
        <div class="container">
            <div class="row">   
                <div class="col-lg-12 col-md-12">   
                    <h2>Tips to Relax and Unwind for a Better Night's Sleep </h2> 
                    <h5>By Luci</h5>
                    <img src="{{url('/images/blog/blog-inner.png')}}" class="img-fluid app-store">
                    <p class="blog-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <h4>1. Keep a Standard Bedtime and Wake Up Time</h4>      

                    <p class="blog-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>



                    <h4>2. Practice a Relaxing Bedtime Ritual</h4>      

                    <p class="blog-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>   



                    <h4>3. Practice a Relaxing Bedtime Ritual</h4>      

                    <p class="blog-txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>        
                </div> 
            </div> 


            <div class="row top-space">
                <div class="col-lg-10 col-10">
                    <input type="text" class="form-control" placeholder="write comments ...">
                </div>
                <div class="col-lg-2 col-2 send-icon">
                    <a href="#" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                </div>
            </div>      
        </div> 
    </section>
</main>

<!-- End #main -->
@endsection