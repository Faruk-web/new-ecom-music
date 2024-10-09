@extends('frontand.master')
@section('content')
      <section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">About Us</span></div>
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
              <li><a>About Us</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body about-us-main mv-bg-gray mv-wrap">
        <div class="about-us-inner">
          <div class="block-our-story">
            <div class="container">
              <div class="mv-block-style-34 mv-bg-white mv-box-shadow-gray-1">
                <div class="block-34-inner">
                  <div class="block-34-title">
                    <div class="text-main">our story</div>
                    <div class="text-sub">our story</div>
                  </div>
                  <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-34-box">
                    <div class="block-34-box-inner mv-col-wrapper">
                      <div class="mv-col-left block-34-thumb"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-34-thumb-img"></span></div>
                      <div class="mv-col-right block-34-main">
                        <div class="block-34-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .mv-block-style-34-->
            </div>
          </div>
          <!-- .block-our-story-->

          <div class="block-our-team mv-bg-white">
            <div class="container">
              <div class="block-our-team-title mv-title-style-3">
                <div class="title-3-text"><span class="behind">our team</span><span class="main">our team</span></div>
              </div>
              <!-- .block-our-team-title-->

              <div class="block-our-team-main">
                <div class="mv-block-style-35">
                  <div class="row block-35-list">

                    <div class="col-xs-6 col-sm-4 item">
                      <div class="item-inner"><a href="#" class="block-35-link"><span class="block-35-default"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-35-bg"><span class="block-35-solid-box"></span><span class="block-35-text"><span class="block-35-title">John Doe</span><span class="block-35-decs">Motor Mechanic</span></span></span></span><span class="block-35-hover"><span style="background-image: url(images/demo/demo_370x530.png);" class="block-35-bg"><img src="images/icon/icon_plus.png" alt="icon" class="block-35-plus"/><span class="block-35-text"><span class="block-35-title">John Doe</span><span class="block-35-decs">Motor Mechanic</span></span></span></span></a></div>
                    </div>

                    <div class="col-xs-6 col-sm-4 item">
                      <div class="item-inner"><a href="#" class="block-35-link"><span class="block-35-default"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-35-bg"><span class="block-35-solid-box"></span><span class="block-35-text"><span class="block-35-title">Jonathan Doe</span><span class="block-35-decs">Motor Mechanic</span></span></span></span><span class="block-35-hover"><span style="background-image: url(images/demo/demo_370x530.png);" class="block-35-bg"><img src="images/icon/icon_plus.png" alt="icon" class="block-35-plus"/><span class="block-35-text"><span class="block-35-title">Jonathan Doe</span><span class="block-35-decs">Motor Mechanic</span></span></span></span></a></div>
                    </div>

                    <div class="col-xs-6 col-sm-4 item">
                      <div class="item-inner"><a href="#" class="block-35-link"><span class="block-35-default"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-35-bg"><span class="block-35-solid-box"></span><span class="block-35-text"><span class="block-35-title">Peter landt</span><span class="block-35-decs">Motor Mechanic</span></span></span></span><span class="block-35-hover"><span style="background-image: url(images/demo/demo_370x530.png);" class="block-35-bg"><img src="images/icon/icon_plus.png" alt="icon" class="block-35-plus"/><span class="block-35-text"><span class="block-35-title">Peter landt</span><span class="block-35-decs">Motor Mechanic</span></span></span></span></a></div>
                    </div>
                  </div>
                </div>
                <!-- .mv-block-style-35-->
              </div>
              <!-- .block-our-team-main-->
            </div>
          </div>
          <!-- .block-our-team-->

          <div class="block-testimonial">
            <div class="container">
              <div class="block-testimonial-inner mv-block-style-36 mv-bg-white mv-box-shadow-gray-1">
                <div class="block-36-inner">
                  <div class="block-36-title">
                    <div class="text-main">testimonial</div>
                    <div class="text-sub">testimonial</div>
                  </div>

                  <div id="testimonial-about-slider" class="testimonial-about-slider mv-slick-slide">
                    <div class="block-36-gallery-main">
                      <div class="slider gallery-main">
                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-box">
                              <div class="block-36-box-inner mv-col-wrapper">
                                <div class="mv-col-left block-36-thumb"><a href="#"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumb-img"></span></a></div>
                                <div class="mv-col-right block-36-main">
                                  <div class="block-36-content mv-quote-style-3 text-center">
                                    <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                                    <div class="quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="block-36-author-info mv-col-wrapper">
                              <div class="mv-col-left block-36-thumb"></div>
                              <div class="mv-col-right block-36-main">
                                <div class="block-36-name"> <a href="#">Peter landt</a></div>
                                <div class="block-36-meta mv-list-inline-style-2">
                                  <ul class="list-inline-2">
                                    <li><a href="#" class="mv-btn">MANAGER MOTOR VERHIKLE</a></li>
                                    <li><a href="#" class="mv-btn">Gold Medalist, Olympics 2015</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- .slick-slide-->

                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-box">
                              <div class="block-36-box-inner mv-col-wrapper">
                                <div class="mv-col-left block-36-thumb"><a href="#"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumb-img"></span></a></div>
                                <div class="mv-col-right block-36-main">
                                  <div class="block-36-content mv-quote-style-3 text-center">
                                    <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                                    <div class="quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="block-36-author-info mv-col-wrapper">
                              <div class="mv-col-left block-36-thumb"></div>
                              <div class="mv-col-right block-36-main">
                                <div class="block-36-name"> <a href="#">Peter landt</a></div>
                                <div class="block-36-meta mv-list-inline-style-2">
                                  <ul class="list-inline-2">
                                    <li><a href="#" class="mv-btn">MANAGER MOTOR VERHIKLE</a></li>
                                    <li><a href="#" class="mv-btn">Gold Medalist, Olympics 2015</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- .slick-slide-->

                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-box">
                              <div class="block-36-box-inner mv-col-wrapper">
                                <div class="mv-col-left block-36-thumb"><a href="#"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumb-img"></span></a></div>
                                <div class="mv-col-right block-36-main">
                                  <div class="block-36-content mv-quote-style-3 text-center">
                                    <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                                    <div class="quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="block-36-author-info mv-col-wrapper">
                              <div class="mv-col-left block-36-thumb"></div>
                              <div class="mv-col-right block-36-main">
                                <div class="block-36-name"> <a href="#">Peter landt</a></div>
                                <div class="block-36-meta mv-list-inline-style-2">
                                  <ul class="list-inline-2">
                                    <li><a href="#" class="mv-btn">MANAGER MOTOR VERHIKLE</a></li>
                                    <li><a href="#" class="mv-btn">Gold Medalist, Olympics 2015</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- .slick-slide-->

                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-box">
                              <div class="block-36-box-inner mv-col-wrapper">
                                <div class="mv-col-left block-36-thumb"><a href="#"><span style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumb-img"></span></a></div>
                                <div class="mv-col-right block-36-main">
                                  <div class="block-36-content mv-quote-style-3 text-center">
                                    <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                                    <div class="quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="block-36-author-info mv-col-wrapper">
                              <div class="mv-col-left block-36-thumb"></div>
                              <div class="mv-col-right block-36-main">
                                <div class="block-36-name"> <a href="#">Peter landt</a></div>
                                <div class="block-36-meta mv-list-inline-style-2">
                                  <ul class="list-inline-2">
                                    <li><a href="#" class="mv-btn">MANAGER MOTOR VERHIKLE</a></li>
                                    <li><a href="#" class="mv-btn">Gold Medalist, Olympics 2015</a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- .slick-slide-->

                      </div>
                    </div>
                    <!-- .block-36-gallery-main-->

                    <div class="block-36-gallery-thumbs">
                      <div class="slider gallery-thumbs">
                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumbs-img">
                              <div class="block-36-thumbs-link">
                                <div class="block-36-thumbs-link-icon fa fa-share-square-o"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumbs-img">
                              <div class="block-36-thumbs-link">
                                <div class="block-36-thumbs-link-icon fa fa-share-square-o"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumbs-img">
                              <div class="block-36-thumbs-link">
                                <div class="block-36-thumbs-link-icon fa fa-share-square-o"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="slick-slide">
                          <div class="slick-slide-inner">
                            <div style="background-image: url({{ asset('/') }}music_source/images/demo/demo_370x530.png);" class="block-36-thumbs-img">
                              <div class="block-36-thumbs-link">
                                <div class="block-36-thumbs-link-icon fa fa-share-square-o"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- .block-36-gallery-thumbs-->
                  </div>
                  <!-- .testimonial-about-slider-->
                </div>
              </div>
              <!-- .mv-block-style-36-->
            </div>
          </div>
          <!-- .block-testimonial-->
        </div>
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