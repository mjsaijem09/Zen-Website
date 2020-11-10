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


    <section id="career-main">



        <div class="container">
            <div class="row">


                <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Career </h1>

                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>


                    </div>
                </div>
            </div>
        </div>


    </section> 




    <section id="faq" class="faq">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 text-center">   

                    <h2>
                        Would you like to join our team of Therapists?      </h2>

                </div>  

            </div>  



            <div class="row">

                <div class="col-lg-6 col-md-6">

                    <img src="{{url('/images/career/team-img.png')}}" class="img-fluid">

                </div>       

                <div class="col-lg-6 col-md-6">

                    <h3 class="open-position">Open Positions</h3>


                    <ul class="faq-list">
 @if(!empty($json) && count($json))
                @foreach($json['careers'] as $career_data)
                
                        <li>
                            <a data-toggle="collapse" class="collapsed" href="#{{$career_data['title']}}">{{$career_data['title']}} <i class="icofont-simple-up"></i></a>
                            <div id="faq1" class="collapse" data-parent=".faq-list">

                                <p> <strong>Location:</strong> {{$career_data['location']}}</p>

                                <p> <strong>Experince:</strong> {{$career_data['experience']}}</p>

                                <p><strong>Salary:</strong> {{$career_data['salary']}}</p>


                            </div>
                        </li>

                        

                     @endforeach
 @endif  

                        

                       



                    </ul>

                </div>  


            </div>   

        </div>
    </section>




    <section id="career-inner">

        <div class="container">

            <div class="row"> 

                <div class="col-lg-12 col-md-12 text-center">    
                    <h2>The next move is your!</h2>

                </div> 

            </div> 



            <div class="row">


                <div class="col-lg-10 offset-lg-1">


                    <form class="form-a">
                        <div class="row">

                            <div class="col-lg-6 col-md-12 mb-2">

                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" placeholder="" class="form-control form-control-lg form-control-a" name="name_vanue" id="name_vanue">

                                </div> 

                            </div>


                            <div class="col-lg-6 col-md-12 mb-2">


                                <div class="form-group">
                                    <label for="email">Email Address:</label>
                                    <input type="text" placeholder="" name="v_email" class="form-control form-control-lg form-control-a" id="v_email">
                                </div>


                            </div>


                            <div class="col-lg-6 col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="phone">Phone Number:</label>
                                    <input type="tel" placeholder="" name="v_phone_no" class="form-control form-control-lg form-control-a" id="v_phone_no">
                                </div>


                            </div>

                            <div class="col-lg-6 col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="name"> City:</label>
                                    <input type="text" placeholder="" name="v_city" class="form-control form-control-lg form-control-a" id="v_city">

                                </div>

                            </div>




                            <div class="col-lg-12 col-md-12 mb-2">
                                <div class="form-group">
                                    <label for="message">Message:</label>

                                    <textarea class="form-control form-control-lg form-control-a" id="more_info" style="height: 100px;" name="more_info"></textarea>

                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 mb-2 text-center">
                                <div class="form-group">

                                    <input type="submit" class="btn btn-b" name="submitButton" value="Submit Message"> 

                                </div>
                            </div>


                        </div>



                    </form>







                </div>

            </div>










        </div>            
    </section>
</main>

<!-- End #main -->

@endsection