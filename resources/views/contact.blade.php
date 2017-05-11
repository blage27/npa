@extends('layouts.publicmaster')

@section('page_title','Contact')

@section('content')

<div class="page-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pull-left"><div class="page-in-name">Contacts: <span>Need Support? Get It!</span></div></div>
            <div class="col-lg-6 pull-right"><div class="page-in-bread"><span>You are here:</span> <a href="#">Home</a> \ Contacts</div></div>
          </div>
        </div>
      </div>
      <div class="container marg75">
        <div class="row">
          <div class="col-lg-12">
            <div class="promo-block">
              <div class="promo-text">Where To Find Us?</div>
              <div class="center-line"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container marg50">
        <div class="row">
          <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.012231742367!2d7.455624514334156!3d9.062647993497517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0b224633a5e1%3A0xf46975a220655dcc!2sBetter+Living+Complex%2C+Algiers+St%2C+Zone+5%2C+Abuja!5e0!3m2!1sen!2sng!4v1493910763873" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div> 
        </div>
      </div>  
      <div class="container marg100">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="promo-block">
              <div class="promo-text">Contact Form</div>
              <div class="center-line"></div>
            </div>
            <div class="marg50">
              <div class="row">
                <div class="form-style" id="contact_form">
                  <div id="contact_body">
                    <div class="col-lg-4">
                      <p class="text_cont"><input type="text" name="name" id="name" placeholder="Name" required="true" class="input-cont-textarea"></p>
                    </div>
                    <div class="col-lg-4">
                      <p class="text_cont"><input type="email" name="email" placeholder="E-mail" required="true" class="input-cont-textarea"></p>
                    </div>
                    <div class="col-lg-4">
                      <p class="text_cont"><input type="text" name="subject" placeholder="Subject" required="true" class="input-cont-textarea"></p>
                    </div>
                    <div class="col-lg-12">
                      <p class="text_cont" style="margin-bottom:0px;"><textarea name="message" id="message" placeholder="Message" required="true" class="input-cont-textarea" cols="40" rows="10"></textarea></p>
                    </div>
                    <div class="col-lg-12"><div id="contact_results"></div></div>
                    <div class="col-lg-12"><p><input type="submit" id="submit_btn" class="btn btn-default" value="Send message" /></p></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="promo-block">
              <div class="promo-text">Information</div>
              <div class="center-line"></div>
            </div>
            <div class="marg50">
                <ul class="contact-footer">
                  <li><i class="icon-location"></i> 112, Better Living Complex,10 Algiers Street Zone 5, Wuse, Abuja</li>
                  <li><i class="icon-mobile"></i>  080-043-567-89</li>
                  <li><i class="icon-mail"></i>  support@npa.com</li>
                  <li><i class="icon-key"></i>  9 am to 6 pm</li>
                </ul> 
                <ul class="soc-contacts">
                  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  
                </ul> 
            </div>
          </div>
        </div>
      </div>
      @endsection