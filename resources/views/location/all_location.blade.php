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

<div class="custom-container" style="margin: 150px 0 0 0;" onload="script();">

<p>Get user coordinates.</p>

</div>
<script>
window.onload = function getLocation() {
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