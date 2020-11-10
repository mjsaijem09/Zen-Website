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
 <main id="main" class="custom">
    <section id="gift-card-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center align-items-center">
            <div class="w-100 text-white">
              <h1>Gift Card </h1>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley  </p>
              <a href="#" class="btn-get-started">Buy Voucher</a> 
            </div>
          </div>
        </div>
      </div>
    </section> 
    <section class="paypal-sec">
      <div class="container">
        <div class="row">  
          <div class="col-lg-7 col-md-8">    
            <h3>Collect the money using Paypal, and client will post the card to them. </h3> 
          </div>   
          <div class="col-lg-5 col-md-4">    
            <img src="{{url('/images/gift/paypal.png')}}" class="img-fluid pay-log"> 
          </div>  
        </div>  
      </div>     
    </section>
    <section id="gift-card" class="gift-card">
      <div class="container">
        <div class="row"> 
          <div class="col-md-12 col-lg-12 text-center">  
            <h2>Only 3 steps to send best gift to you families:</h2>
          </div>      
        </div>        
        <div class="row"> 
          @if(!empty($json) && count($json))
          @foreach($json['gifcard'] as $gift_card_data)
          <div class="col-md-4 col-lg-4 text-center"> 
            <img src="{{url($gift_card_data['image'])}}"  class="img-fluid" width="200px"> 
            <h4>{{$gift_card_data['title']}}</h4>
            <p>{{$gift_card_data['description']}}</p>
          </div>
          @endforeach
          @endif
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Purchase Gift Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <div class="form-group">
                    <label for="defValue">Different Value</label>
                    <select id="defValue" class="form-control form-control-lg">
                      <option value="50 Dollars">50 Dollars $55.00 AUD</option>
                      <option value="75 Dollars">75 Dollars $80.00 AUD</option>
                      <option value="85 Dollars">85 Dollars $90.00 AUD</option>
                      <option value="100 Dollars">100 Dollars $105.00 AUD</option>
                      <option value="150 Dollars">150 Dollars $155.00 AUD</option>
                    </select>
                  </div>
                  <div class="atm-card-label">
                    <label for="atm-card">Payment Method</label>
                  </div>
                  <div id="atm-card" class="btn-group btn-group-toggle group-atm" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="options" id="option1" autocomplete="off" checked><img src="{{url('/atm-card/Visa.svg.png')}}" alt="" width="90px">
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option2" autocomplete="off"><img src="{{url('/atm-card/Mastercard-Africa.png')}}" alt="" width="90px">
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option3" autocomplete="off"><img src="{{url('/atm-card/amex.jpg')}}" alt="" width="90px">
                    </label>
                  </div>
                  <div class="form-group Card-Number">
                    <label for="inputAddress">Card Number</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="4444 4444 4444 4444">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Expiry Date</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="MM/YY">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Security Code</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="CVC">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer" style="justify-content: space-between;">
                <div class="btn-group btn-group-toggle btn-block" data-toggle="buttons">
                  <label class="btn btn-secondary cancel">
                    <input type="radio" name="options" id="option1" autocomplete="off">Cancel
                  </label>
                  <label class="btn btn-secondary pay">
                    <input type="radio" name="options" id="option2" autocomplete="off">Buy
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-lg-6 offset-lg-3 offset-md-2 text-center"> 
            <a class="btn" data-toggle="modal" data-target="#exampleModal">Purchase a Gift Card</a>
            <p>*Luxury Appearance *Never expire *post a week time</p>
          </div>
        </div>
      </div>
    </section>
    <section id="luxery-sec">
      <div class="container">
        <div class="row"> 
          <div class="col-lg-4 col-md-4 text-center align-items-center">    
            <h3>Luxury Appearance</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
          </div>
          <div class="col-lg-4 col-md-4 text-center align-items-center">    
            <h3>Never Expire</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
          </div>
          <div class="col-lg-4 col-md-4 text-center align-items-center">    
            <h3>Post a week time</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley </p>
          </div>
        </div>
      </div>
    </section>
    <section class="additional-note">
      <div class="container">
        <div class="row">    
          <div class="col-lg-12 col-md-12"> 
            <p><strong>Additional Note:</strong> Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
              text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
              It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
              It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <div class="col-md-12 col-lg-12 col-12 text-center">   
            <a href="services-inner-page.html" class="btn-read">Buy Voucher</a>      
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
<!-- End #main -->
@endsection