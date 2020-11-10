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
<main id="main" class="custom">
  <section id="about" class="about">
    <div class="custom-container">
      <div class="row"> 

        <div class="col-md-7 col-lg-9 col-6"> 
          <h2></h2>  
        </div>

        <div class="col-md-5 col-lg-3 col-6"> 
          <h3></h3>
        </div>

      </div>   

      <div class="row"> 
      
        <div class="custom col-lg-4">    
          <!-- Exaple 1 -->
          <div class="card example-1 scrollbar-ripe-malinka">
            <div class="card-body">

            @if(!empty($Shops['result']) && count($Shops['result']))

            <?php $i = -1; foreach($Shops['result'] as $val): 0;
            ?>
              <div class="shop_block rounded-bottom" onclick="jumpToMarker(<?php echo ++$i; ?>)">
                
                <figure>
                    <img src="{{url('https://lh5.googleusercontent.com/p/AF1QipPzIuBaXHYWPXzRLQUXaxCZ8Ecep8puntuYV9AZ=w408-h272-k-no')}}">
                </figure>
          
                <div class="bottom_content-2">
                  <h4 id="shop_address">{{!empty($val['name'])?$val['name']:''}}
                </h4>

                <p><span class="txt-rate">{{!empty($val['rating']['count'])?'('.$val['rating']['count'].')':''}}</span></p>
                
                <div class="buttons">
                  <a class="btn btn-brown shopmap btn-sm" href="{{url('BookAppointment',[$val['_id']])}}" role="button">Book Now</a>
                  <span class="distan">
                    <i class="material-icons explore">explore</i>
                    <p>{{ round(get_estimated_distance_time(session('user_lat'), session('user_long'), $val['geo_location']['coordinates'][1], $val['geo_location']['coordinates'][0])) }} Km</p>
                  </span>
                </div>
              </div>     

            </div>
            <?php endforeach ?>

            @else
            <div class="col-lg-12 col-md-12"><h4>Data Not Found! </h4> </div>
            @endif

          </div>
        </div>
        <!-- Exaple 1 -->
        </div>

        <div class="custom col-lg-8">  
          <div class="map-fix">
              
          <div id="map"></div>

          </div> 
      
        </div>

      </div>

    </div>

  </section>
</main>

<script>
window.onload = function passLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(bindPosition);
  } else { 
    y.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function bindPosition(position) {
  $.ajax({
    url: "/getlocation",
    type: "POST",
    dataType: "json",
    data: { 
      "_token": "{{ csrf_token() }}",
      lat: position.coords.latitude, 
      long: position.coords.longitude
    },
    success: function(data){
        console.log(data);
    },
    error: function(response){
        console.log("error:"+response);
    }
  })
}
</script>

@endsection


<!-- End Select Shop -->