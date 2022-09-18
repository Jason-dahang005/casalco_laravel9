@extends('client.index')
@section('titlel', 'About Us')
@section('client_content')

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>About Us</h6>
                      <h2>We Leave A Delicious Memory For You</h2>
                  </div>
                  <p>Klassy Cafe is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank" rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS framework. You can download and feel free to use this website template layout for your restaurant business. You are allowed to use this template for commercial purposes. <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please contact us for more information.</p>
                  <div class="row">
                      <div class="col-4">
                          <img src="../klassy/images/CU-Logo.jpg" alt="">
                      </div>
                      <div class="col-4">
                          <img src="../klassy/images/CUBEd.jpg" alt="">
                      </div>
                      <div class="col-4">
                          <img src="../klassy/images/cumc-logo-heading-svg.svg" alt="">
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-md-6 col-xs-12">
              <div class="right-content">
                  <div class="thumb">
                      <!-- <a rel="nofollow" href="#"><i class="fa fa-play"></i></a> -->
                      <!-- <img src="../klassy/images/about-video-bg.jpg" alt=""> -->
                      <!-- <video>
                        <source src="../klassy/images/Casalco-video.mpg" type="video/mpg">
                      </video> -->
                      <div id="video-player"> 
                            <video width="100%" controls muted autoplay loop> 
                                <source src="../klassy/images/Casalco-video.mp4" type="video/mp4"> 
                                
                            </video> 
                    </div> 
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ***** About Area Ends ***** -->


@endsection