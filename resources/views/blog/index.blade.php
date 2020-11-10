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


    <section id="blog-top">



        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Blog </h1>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>


                    </div>
                </div>
            </div>
        </div>


    </section> 



    <section class="blog-inner">

        <div class="container">

            <div class="row">   

                <div class="col-lg-12 col-md-12 text-right">   

                    <p class="pages-list">Page 1 of 20 <a href="javascript:voi(0)"> Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></p>  

                </div> 


            </div> 


            <div class="row">   

                <div class="col-lg-12 col-md-12">   
 @if(!empty($json) && count($json))
                @foreach($json['blog'] as $blog_data)
                    <div class="blog-box">  

                        <h4>{{$blog_data['title']}}</h4>  

                        <p class="previous-posts-date"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$blog_data['blog_date']}}</p>

                        <p>{{$blog_data['description']}}</p>
                        <div class="blog-btn-sapce"><a href="javascript:voi(0)" class="blog-btn">Read More</a></div>

                    </div>   

@endforeach
 @endif
                   


                </div> 








            </div> 



        </div> 

    </section>
</main>

<!-- End #main -->

@endsection