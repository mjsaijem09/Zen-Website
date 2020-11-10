@extends('layouts.homelayout')
@section('title', 'Zen Body Massage')
<!--/ in case you want to write JS, write here/-->
@section('custom_js')
@parent
<!--/ in case you want to write JS, write here/-->

<script>
   $(document).ready(function() {
 
    $("#owl-demo").owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
    });
  });

</script>

<!--/ in case you want to write JS, write here/-->
@endsection


@section('custom_css')
@parent
<!--/ in case you want to write CSS, write here/-->
<style type="text/css">
    
    @font-face {
    font-family: 'Avenir';
    src : url('../fonts/Avenir.ttc');
}
html{
    overflow:overlay;
}
*,html,body{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Avenir';
}
/* width */
::-webkit-scrollbar {
    width: 0px;
}
  
  /* Track */
::-webkit-scrollbar-track {
    background: transparent; 
}
   
  /* Handle */
::-webkit-scrollbar-thumb {
    background: transparent; 
}
  
  /* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
    width:10px
}
.genderImg{
    width:100%;
    max-width: 52px;
}
.btn-neutral{
    border:1px solid #000;
}
.btn-neutral:hover{
    background:#000;
    color:#fff;
}
#owl-demo .item img{
    display: block;
    width: 100%;
    height: auto;
}
#owl-demo{
    max-width:280px !important;
    width:100% !important;
}
span.lightText{
    font-size: 12px;
    line-height: 2;
    cursor: pointer;
    color: #ada3a3;
}
p.reviewName{
    margin-bottom:5px;
}
.rplyBox,
.cmntBox{
    display:none;
}
.cmntBox.active,
.rplyBox.active{
    display: block;
}
.addReview{
    display: block;
    width: 100%;
    max-width: 580px;
    border-radius: 5px;
    padding: 8px 1rem;
    border: 1px solid #ddd;
    background: #f1f1f1;
}
</style>



<!--/ in case you want to write CSS, write here/-->
@endsection
@section('sidebar')
@parent
<!--/ in case you want add something to Sidebar, write here/-->



<!--/ in case you want add something to Sidebar, write here/-->
@endsection

@section('content')





<main id="main" class="custom">
    <section id="therepis">
        <div class="overlay"></div>
            <div class="row">
                <div class="col-lg-12 col-lg-12 col-sm-12 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1>Expert </h1>
                        <p>When the #1 provider of skin care services partners with the #1 acne brand in Australia* you get powerful results.
                            The Acne Facial Series Powered by Bookus® is now available at select Zenbody massage locations near you.</p>
                    </div>
                </div>
            </div>
    </section> 
    <section id="review-sec">
            <div class="row">  
                <div class="col-lg-12 col-lg-12">       
                </div>
            </div>
                <div class="row mt-4">
                    @if(!empty($Therapist) && count($Therapist))
                    @foreach($Therapist['result'] as $val)
                    <div class="col-12 col-lg-4">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item"><img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" alt="The Last of us"></div>
                            <div class="item"><img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" alt="GTA V"></div>
                            <div class="item"><img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" alt="Mirror Edge"></div>
                        </div>
                        <h3>Ratings & Reviews</h3>
                        <div class="rating-count">
                            <p>{{number_format($val['rating']['star'], 1, '.',' ')}}</p>
                            <span class="stars">{{star_count($val['rating']['star'])}}</span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 profile">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="therapist-info">
                                    <div class="name-gender">
                                        <h2>{{ucwords($val['firstName'])}} {{ucwords($val['lastName'])}}</h2>
                                        <img src="{{getImageByGenderIcon(!empty($val['gender'])?$val['gender']:'')}}" class="gender-icon" style="height:40px; width:40px">
                                    </div>
                                    <p class="waiting-time">Waiting Time: 30mins</p>
                                    <div class="row">
                                        <div class="col-lg-4 achiev">
                                            <div class="flex"><i class="material-icons">event_available</i><p class="achievement">{{!empty($val['bookedTimes'])?'Booked '.$val['bookedTimes'].' times':''}}</p></div>
                                            <div class="flex"><i class="material-icons">access_time</i><p class="achievement">Worked for 862 Hours</p></div>
                                            <div class="flex"><i class="material-icons">school</i><p class="achievement">Certifications 3</p></div>
                                            <div class="flex"><i class="material-icons">language</i><p class="achievement">English, Mandarin</p></div>
                                        </div>
                                        <div class="cold-lg-8">
                                            <div class="exp">
                                                <h5>Expertise</h5>
                                                <p>Aroma Therapy</p>
                                                <p>Deep Tissue</p>
                                            </div>
                                            <?php
                                                if($val['location'][0] == '5e53a2ca00392e001ac783f0'){
                                                    $shopName = "Zen Body Massage Kalgoorlie";
                                                    $shopLocation = "132 Hannan St, Kalgoorlie WA 6430, Australia Kalgoorlie.";
                                                }else if($val['location'][0] == '5e53a35c00392e001ac783f5'){
                                                    $shopName = "Zen Body Massage Busselton";
                                                    $shopLocation = "51 Queen Street Busselton.";
                                                }else {
                                                    $shopName = "Zen Body Massage Mandurah";
                                                    $shopLocation = "84 Pinjarra Rd, Mandurah WA 6210, Australia Mandurah.";
                                                }
                                            ?>
                                            <div class="exp" style="margin: 15px 0 0 0;">
                                                <h5>Shop Location</h5>
                                                <p>{{$shopName}}</p>
                                                <p>{{$shopLocation}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row mt-4">
                            <div class="col-12">
                                <p>
                                {{ucwords($val['staffTitle'])}} </p>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <a href="{{url('/BookAppointment',$val['location'][0])}}" type="button" class="btn btn-outline-dark btn-lg book-now-button">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                        @endforeach
                            @else
                            <div>No Reviews!</div>
                        @endif
                </div>

                <div class="row mt-4">
                    <div class="col-3" style="margin-bottom: 10px;">
                        <div class="form-group filter">
                            <label for="staticEmail" class="col-form-label"><strong>Filter :</strong></label>
                            <select class="form-control">
                                <option>Highest</option>
                                <option>Lowest</option>
                                <option>Latest</option>
                                <option>Popular</option>
                            </select>
                        </div>
                        @if(!empty($Therapist) && count($Therapist))
                        @foreach($Therapist['result'] as $val)
                        <p class="review-count">{{$val['rating']['count'],''}} Reviews</p>
                        @endforeach
                            @else
                            <div>No Reviews!</div>
                        @endif
                    </div>
                </div>
                @if(!empty($ratings['result'] ) && count($ratings['result'] ))
                @foreach($ratings['result'] as $val)
                <div class="row">
                    <div class="col-12 col-lg-9 col-lg-10">
                        <div class="row">
                            <div class="col-12 col-lg-1 mb-3">
                                <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="genderImg"/>
                            </div>
                                <div class="col-12 col-lg-11">
                                    <p class="reviewName"><strong>{{!empty($val['customerId']['userName'])?$val['customerId']['userName']:''}}</strong></p>
                                    <p class="pt-2">{{star_count(!empty($val['star'])?$val['star']:'')}}</p>
                                    <p class="loadMore">{{$val['review']}}</p>
                                    <span class="lightText cmnt">Reply &#8226;</span>
                                    <span>
                                        <i class="fa fa-thumbs-up"></i>
                                        <span class="lightText">2</span>
                                    </span>
                                    <div class="cmntBox row mt-4">
                                        <div class="col-12 col-lg-9 col-lg-10">
                                            <div class="row">
                                                <div class="col-12 col-lg-2 mb-3">
                                                    <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="genderImg"/>
                                                </div>
                                                <div class="col-12 col-lg-10">
                                                    <p class="reviewName"><strong>Narelle Sisley</strong></p>
                                                    <span class="lightText">2 Reviews</span>
                                                    <p class="pt-2">{{star_count(!empty($val['star'])?$val['star']:'')}}</p>
                                                    <p class="loadMore">{{$val['review']}}</p>
                                                    <span class="lightText rply">Reply &#8226;</span>
                                                    <span>
                                                        <i class="fa fa-thumbs-up"></i>
                                                        <span class="lightText">2</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="row mt-4 rplyBox">
                                                <div class="col-12 col-lg-9 col-lg-10">
                                                    <div class="row">
                                                        <div class="col-12 col-lg-2 mb-3">
                                                            <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="genderImg"/>
                                                        </div>
                                                        <div class="col-12 col-lg-10">
                                                            <textarea class="addReview" placeholder="Enter your comment" ></textarea>
                                                            <div style="float: right;">
                                                                <span class="lightText">Post</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-lg-9 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-lg-1 mb-3">
                                    <img src="{{getImageByGender(!empty($val['gender'])?$val['gender']:'')}}" class="genderImg"/>
                                </div>
                                <div class="col-12 col-lg-11">
                                    <textarea class="addReview" placeholder="Leave your review." ></textarea>
                                    <div style="float: right;width: 38%; margin: 10px 0 0 0;">
                                        <button type="button" class="btn btn-light lightText"><span class="lightText">Post</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    @else
                    <div class="row mt-4">
                        <div class="col-12 col-lg-9 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-lg-1 mb-3">
                                    <img src="http://127.0.0.1:8000/Group 237.png" class="genderImg">
                                </div>
                                <div class="col-12 col-lg-11">
                                    <textarea class="addReview" placeholder="Leave your review."></textarea>
                                    <div style="float: right;width: 38%; margin: 10px 0 0 0;">
                                        <button type="button" class="btn btn-light lightText"><span class="lightText">Post</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
        </div>
    </section>
</main>

<!-- End #main -->
@endsection