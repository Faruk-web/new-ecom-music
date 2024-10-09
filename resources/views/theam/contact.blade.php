@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Contact Us</span></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->

      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="home.html"><i class="fa fa-home"></i></a></li>
              <li><a>Contact Us</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body contact-us-main mv-bg-gray mv-wrap">
        <div class="contact-us-form">
          <div class="container">
            <div class="mv-block-style-32">
              <div class="block-32-form mv-box-shadow-gray-1">
                <div class="block-32-form-title mv-title-style-3">
                  <div class="title-3-text"><span class="behind">contact form</span><span class="main">contact form</span></div>
                </div>
                <!-- .block-32-form-title-->

                <div class="block-32-form-main">
                  <form method="GET" class="form-contact mv-form-horizontal">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Name</strong></div>
                          <div class="col-md-10 mv-field">
                            <input type="text" name="test127" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Mobile</strong></div>
                          <div class="col-md-10 mv-field">
                            <input type="text" name="test595" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Email</strong></div>
                          <div class="col-md-10 mv-field">
                            <input type="email" name="test595" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <div class="mv-form-group">
                          <div class="col-md-2 mv-label"> <strong class="text-uppercase">Website</strong></div>
                          <div class="col-md-10 mv-field">
                            <input type="text" name="test327" class="mv-inputbox mv-inputbox-style-1"/>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mv-form-group input-message-wrapper">
                      <div class="col-md-1 mv-label"> <strong class="text-uppercase"> </strong></div>
                      <div class="col-md-11 mv-field">
                        <textarea name="test178" rows="6" placeholder="Write a message" data-mv-placeholder="Write a message" class="mv-inputbox mv-inputbox-style-1"></textarea>
                      </div>
                    </div>

                    <div class="mv-form-group submit-button">
                      <div class="col-md-1 mv-label"> <strong class="text-uppercase"> </strong></div>
                      <div class="col-md-11 mv-field">
                        <button type="submit" class="mv-btn mv-btn-style-5 btn-5-h-50 mv-btn-block btn-subscribe">Subscribe</button>
                      </div>
                    </div>
                  </form>
                  <!-- .form-contact-->
                </div>
                <!-- .block-32-form-main-->
              </div>
              <!-- .block-32-form-->

              <div class="block-32-contact mv-box-shadow-gray-1">
                <div class="row">
                  <div class="col-xs-12 col-sm-4">
                    <div class="contact-box">
                      <div class="mv-icon-left-style-7">
                        <div class="i-l-inner">
                          <div class="i-l-text"><span class="i-l-icon icon-map-marker fa fa-map-marker mv-f-54 mv-color-primary"></span>
                            <div class="text-main">address</div>
                            <div class="text-sub">Canifa Shop Center 85 Fentiman Ave</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-4">
                    <div class="contact-box">
                      <div class="mv-icon-left-style-7">
                        <div class="i-l-inner">
                          <div class="i-l-text"><span class="i-l-icon icon-mobile fa fa-mobile mv-f-60 mv-color-primary"></span>
                            <div class="text-main">phone</div>
                            <div class="text-sub">
                               
                              Phone: <a href="tel:1-800-64-38"> 1-800-64-38 </a><br/>Fax:<a href="tel:1-800-64-39"> 1-800-64-39 </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-4">
                    <div class="contact-box">
                      <div class="mv-icon-left-style-7">
                        <div class="i-l-inner">
                          <div class="i-l-text"><span class="i-l-icon icon-envelope fa fa-envelope-o mv-f-48 mv-color-primary"></span>
                            <div class="text-main">e-mail</div>
                            <div class="text-sub"> <a href="mailto:info@motor.com">info@motor.com</a><br/><a href="mailto:motor@shoponline.com">motor@shoponline.com</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .block-32-contact-->
            </div>
            <!-- .mv-block-style-32-->
          </div>
          <!-- .contact-us-form-->
        </div>

        <div class="contact-us-map">
          <div class="map-embed">
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
            <div id="mv-map-canvas" data-latitude="33.9797094" data-longitude="-118.4653849" data-address="Latitude 33 - Sky Tower, Via Dolce, Marina del Rey, America"></div>
          </div>
        </div>
        <!-- .contact-us-map-->
      </section>
      <!-- .mv-main-body-->

      <section class="main-newsletter mv-newsletter-style-1 mv-wrap">
        <div style="background-image: url({{ asset('/') }}music_source/images/background/demo_bg_1920x1680.png)" class="newsletter-bg">
          <div class="container">
            <form method="GET" class="form-newsletter">
              <label class="hidden-xs mv-label text-right text-uppercase">Newsletter</label>
              <div class="mv-field">
                <div class="mv-inputbox-group">
                  <input type="text" name="test138" placeholder="Subscribe your email here" data-mv-placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-3"/>
                  <div class="inputbox-addon">
                    <button type="button" class="mv-btn mv-btn-block mv-btn-style-13"><span class="btn-icon fa fa-long-arrow-right"></span></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- .mv-newsletter-style-1-->
@endsection