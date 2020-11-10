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

    
    <?php 
    //echo '<pre>'; print_r(session('shopSessionData'));
    echo '<pre>'; print_r($Company); ?>

@endsection