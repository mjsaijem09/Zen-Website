<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function star_count($startCount){
    $fraction = $startCount - floor($startCount);
    if($fraction < .25){
	$dec=0;
    }elseif($fraction >= .25 && $fraction < .75){
        $dec=.50;
    }elseif($fraction >= .75){
        $dec=1;
    }
    $r = floor($startCount) + $dec;
    $newwhole = floor($r);
    $newfraction = $r - $newwhole;
    $unchecked_star = floor(5-$r);
    for($s=1;$s<=5;$s++){
        if($s<=$r){
             echo  ' <span class="fa fa-star checked"></span>';
        }
    }
    if($newfraction==.5){
        echo '<span class="fa fa-star-half-o checked"></span>';	
    }
    for($s=1;$s<=$unchecked_star;$s++){
        echo  ' <span class="fa fa-star"></span>';
    }
}
   
function change_format($date){
    if($date!=''){
        $year = date("Y",strtotime($date));
        $month = date("F",strtotime($date));
        $day = date("d",strtotime($date));
        return $month.' '. $day.' '.$year;
    }else{
        return date('F').' '.date('d').' '.date('d');
    }
}

 function getDateFrom($date){
    if($date!=''){
        $date = date("d/m/y",strtotime($date));
        
        return $date ;
    }else{
        return date('d/m/y');
    }
    
   
}

function get_estimated_distance_time($lat1, $lon1, $lat2, $lon2) {
    $R = 6371; // Radius of the earth in km
    $dLat = deg2rad($lat2-$lat1);  // deg2rad below
    $dLon = deg2rad($lon2-$lon1);
    $a = sin($dLat/2)*sin($dLat/2) + cos(deg2rad($lat1))*cos(deg2rad($lat2))*sin($dLon/2)*sin($dLon/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    $d = $R * $c; // Distance in km
    return $d;
  }

// function get_estimated_distance_time($lat1, $lat2, $long1, $long2) {
//     trim($lat1);
//     trim($lat2);
//     trim($long1);
//     trim($long2);
//     $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=" . $lat1 . "," . $long1 . "&destinations=" . $lat2 . "," . ltrim($long2) . "&mode=driving&key=AIzaSyBsKtyjwdGFWNdUML_0lXGph-6PaRNG7vE";
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_URL, $url);
//     $result = curl_exec($ch);
//     curl_close($ch);
//     $response_a = json_decode($result, true);
//     $dist = @$response_a['rows'][0]['elements'][0]['distance']['text'];
//     $time = @$response_a['rows'][0]['elements'][0]['duration']['text'];
//     $timeInSecond = @$response_a['rows'][0]['elements'][0]['duration']['value'];

//     $distance = $dist != NULL ? $dist : '0 km';
//     $duration = $time != NULL ? $time : '0 hours 0 mins';
//     return array('distance' => $distance, 'time' => $duration, 'timeInSecond' => $timeInSecond, 'url' => $url, 'response' => $response_a);
// }

function getBannerHeading($Banner=''){
    return (!empty($Banner['result']['title']))?$Banner['result']['title']:'';
    
}
function getBannerDesc($Banner=''){
    return (!empty($Banner['result']['description']))?$Banner['result']['description']:'';
    
}

function getImageByGender($gender=''){
    if(!empty($gender) && $gender=='Male'){
        return $image =  url('/Group 234.png');
    }else if(!empty($gender) && $gender=='Female'){
         return $image =  url('/Group 237.png');
    }else{
        return $image =  url('/Group 237.png');
    }
}

function getImageByGenderIcon($gender=''){
    if(!empty($gender) && $gender=='Male'){
        return $image =  url('/male.png');
    }else if(!empty($gender) && $gender=='Female'){
         return $image =  url('/female-xxl.png');
    }else{
        return $image =  url('/female-xxl.png');
    }
}

?>
