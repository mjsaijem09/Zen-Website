@extends('booking.layout')
@section('content')
<div class="appointment-container">
    <div class="appointment-header-container">
        <div class="row" style="margin: 0;">
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <div class="appointment-header-content">
                    <div>
                        <h3>Select Services<span>Step 1 of 4</span></h3>
                    </div>
                    <span class="material-icons" onclick="history.back();" style="cursor: pointer;">close</span>
                </div>
            </div>
        </div>
    </div>
    <div class="appointment-content">
        <div class="row">
            @if(!empty($Shops['result']) && count($Shops['result']))
            @foreach($Shops['result'] as $val)
            <div class="col-lg-4">
                <div class="card shadow" style="width: 18rem;">
                    <img src="{{url('images/shop-images/kalgoorlie.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="custom card-title">{{!empty($val['name'])?ucwords($val['name']):'no data'}}</h5>
                        <p class="card-text" style="color: #878c93;">{{!empty($val['street'])?$val['street']:''}} {{!empty($val['city'])?$val['city']:''}}.</p>
                    </div>
                    <hr style="margin: 0;">
                    <div class="card-body">
                        <p class="card-text" style="color: #878c93;">No services selected yet</p>
                    </div>
                    <hr style="margin: 0;">
                    <div class="card-body" style="display: flex; justify-content: space-between; align-items: center;">
                        <h5 class="custom card-title">Total</h5>
                        <h5 class="custom card-title r-text" id="amount">$0</h5>
                    </div>
                    <div id="btn_hide" class="book-now-hide">
                        <a class="btn btn-Brown btn-lg btn-block" href="#" role="button">Book Now</a>
                    </div>
                </div>
            </div>
            @endforeach 
            @else
            <div class="col-lg-4"><h4>Data Not Found! </h4> </div>
            @endif
            <div class="col-lg-8">
                @if(!empty($Service) && count($Service))
                @foreach($Service['result'] as $value)
                <?php
                    usort( $value, function ( $a, $b )
                    {
                    return $b['bookedTimes'] <=> $a['bookedTimes'];
                    });
                    $q = 0; $w = 0; $e = 0; $r = 0; $t = 0;
                ?>
                @foreach($value as $val)
                <div class="accordion" id="accordionExample">
                    <div class="card shadow">
                        <div class="custom card-header" id="heading-<?php echo ++$q; ?>" style="padding: 10px 0;">
                            <h2 class="mb-0">
                                <button class="custom btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse-<?php echo ++$w; ?>" aria-expanded="true" aria-controls="collapse-<?php echo ++$e; ?>">
                                    <div class="service-info-bar">    
                                        <div style="display: flex; align-items: center">
                                            <span class="material-icons" style="margin: 0 8px 0 0;">more_vert</span>    
                                            <div>
                                                <h4 class="service-title">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                                <p class="service-duration">30min - 2h</p>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="from">From</p>
                                            <p class="price">$30</p>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse-<?php echo ++$r; ?>" class="collapse" aria-labelledby="heading-<?php echo ++$t; ?>" data-parent="#accordionExample">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="35">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">30min</p>
                                        </div>
                                        <div>
                                            <p class="price">$35</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0;">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="50">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">45min</p>
                                        </div>
                                        <div>
                                            <p class="price">$50</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0;">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="60">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">1h</p>
                                        </div>
                                        <div>
                                            <p class="price">$60</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0;">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="70">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">1h 15min</p>
                                        </div>
                                        <div>
                                            <p class="price">$70</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0;">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="80">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">1h 30min</p>
                                        </div>
                                        <div>
                                            <p class="price">$80</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0;">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="90">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">1h 45min</p>
                                        </div>
                                        <div>
                                            <p class="price">$90</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0;">
                            <div class="custom-inner card-body">
                                <div>
                                    <label class="container-radio">
                                        <input type="radio" name="radio" value="100">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div style="display: flex; justify-content: space-between; align-item: center;">
                                        <div style="margin-left: 60px;">
                                            <h4 class="service-title" style="margin: -7 0 0 0;">{{!empty($val['name'])?$val['name']:'no data'}}</h4>
                                            <p class="service-duration">2h</p>
                                        </div>
                                        <div>
                                            <p class="price">$100</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="margin: 0; border: 0; border-top: 1px solid #ffffff;">
                @endforeach
                @endforeach
                @else
                <div class="col-lg-8 col-md-8"><h4>Data Not Found! </h4> </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection