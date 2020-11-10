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



<main id="main">


    <section id="therepis">


        <div class="overlay"></div>



        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Expert </h1>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>


                    </div>
                </div>
            </div>
        </div>


    </section> 



    <section class="therepis-inner">

        <div class="container">

            <div class="row">  
 @if(!empty($Therapist) && count($Therapist))
                @foreach($Therapist['result'] as $val)
                
                <div class="col-md-12 col-lg-12"> 

                    <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">

                        <div class="carousel-inner" role="listbox">



                            <div class="carousel-item active w-100">

                                <div class="row">  

                                    <div class="col-md-6 col-lg-6"> 

                                        <div>

                                            <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="img-fluid">  

                                        </div>

                                    </div>


                                    <div class="col-md-6 col-lg-6"> 

                                         <h2>{{ucwords($val['firstName'])}} {{ucwords($val['lastName'])}}</h2>  
                    <h5>{{ucwords($val['staffTitle'])}}</h5>  
                    <p class="rating">
                        <span>{{$val['rating']['star']}}</span>
                        {{star_count($val['rating']['star'])}}
                    </p>

                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>


                                        <p>Hope I can see you later.</p>


                                        <a href="#" class="btn">Book Me</a>


                                    </div>


                                </div>

                            </div>
                            <!-- /.carousel-item -->

                            <!-- /.carousel -->


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




                <section id="review-sec">
                    <div class="container">
                        <div class="row">  

                            <div class="col-lg-12 col-md-12">       

                                <h3>Rating & Review</h3>
                            </div>


                            <div class="col-lg-12 col-md-12">  

                                <div class="review-area">

                                    <div class="row">   
                                        @if(!empty($ratings['result'] ) && count($ratings['result'] ))

                                        @foreach($ratings['result'] as $val)
                                        <div class="col-lg-9 col-md-8">  

                                            <p>{{$val['review']}}</p>

                                            <div class="media">
                                                <div class="media-left d-flex mr-3">
                                                    <img src="{{url('/images/image_review.png')}}">										
                                                </div>
                                                <div class="media-body">
                                                    <div class="overview">
                                                        <div class="name"> {{!empty($val['customerId']['userName'])?$val['customerId']['userName']:''}} </div>
                                                        <div class="details">

                                                            <p>
                                                                <span></span>
                                                                {{star_count(!empty($val['star'])?$val['star']:'')}}</p>
                                                            

                                                        </div>										

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <div>No Reviews!</div>
                                        @endif
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>           

                </section>
                </main>

                <!-- End #main -->
                @endsection