@extends('frontand.master')
@section('content')
@php
    $discount = 0;
    if(Session::has('coupon_discount')){
        $discount = Session::get('coupon_discount');
    }
@endphp

        <section class="main-banner mv-wrap">
                <div data-image-src="{{asset('images/event/'.$events->banner )}}" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
                <div class="page-name mv-caption-style-6">
                    <div class="container">
                    <div class="mv-title-style-9"><span class="main">blog detail</span></div>
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
              <li><a href="#">Blog</a></li>
              <li><a>Blog detail</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->

      <section class="mv-main-body blog-detail-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="row mv-content-sidebar">
            <div class="mv-c-s-content col-xs-12 col-md-8 col-lg-9">
              <div class="blog-detail-block block-main-content">
                <div class="mv-block-style-30 mv-bg-white mv-box-shadow-gray-1">
                  <div class="block-30-header">
                    <div class="mv-dp-table">
                      <div class="mv-dp-table-cell block-30-date-wrapper hidden-xs">
                        <div class="mv-date-style-1">
                          <div class="day">29</div>
                          <div class="month">sep </div>
                        </div>
                      </div>
                      <div class="mv-dp-table-cell block-30-title-wrapper">
                        <div class="block-30-col-inner">
                          <div class="block-30-title">{{$events->title}}</div>
                          <ul class="block-30-meta mv-ul">
                            <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-pencil-square-o"></i></span>Tony Jahson</span></a></li>
                            <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-comments-o"></i></span>150 Comments</span></a></li>
                            <li class="meta-item mv-icon-left-style-3 hidden-sm hidden-md hidden-lg"><a href="#"><span class="text"><span class="icon"><i class="fa fa-calendar"></i></span>Sep 29, 2016</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="block-30-post-format"><i class="icon fa fa-file-image-o"></i></div>
                  </div>
                  <!-- .block-30-header-->

                  <div class="block-30-featured">
                    <div class="mv-block-style-40">
                      <div class="blog-detail-slider mv-slick-slide">
                        <div class="block-40-gallery-main">
                          <div class="slider gallery-main">
                            <div class="slick-slide">
                              <div class="slick-slide-inner"><img src="{{asset('images/event/'.$events->image )}}" alt="demo" class="block-40-main-img"/></div>
                            </div>
                            <!-- .slick-slide-->
                             
                          </div>
                        </div>
                        <!-- .block-40-gallery-main-->
                        <!-- .block-40-gallery-thumbs-->
                      </div>
                      <!-- .blog-detail-slider-->
                    </div>
                    <!-- .mv-block-style-40-->
                  </div>
                  <div class="block-30-main">
                    <div class="block-30-main-inner">
                      <div class="block-30-content clearfix">
                        <p>{{$events->short_descp}}</p>
                        
                      </div>
                      <!-- .block-30-content-->
                    </div>
                  </div>
                  <!-- .block-30-featured-->
                  <div class="block-30-featured">
                    <div class="mv-block-style-40">
                      <div class="blog-detail-slider mv-slick-slide">
                        <div class="block-40-gallery-main">
                          <div class="slider gallery-main">
                            <div class="slick-slide">
                              <div class="slick-slide-inner">
                                <video width="750" height="500" controls>
                                <source src="{{asset($events->video)}}" type="video/mp4">
                                Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            <!-- .slick-slide-->
                          </div>
                        </div>
                        <!-- .block-40-gallery-main-->
                        <!-- .block-40-gallery-thumbs-->
                      </div>
                      <!-- .blog-detail-slider-->
                    </div>
                    <!-- .mv-block-style-40-->
                  </div>
                  <!-- .block-30-featured-->

                  <div class="block-30-main">
                    <div class="block-30-main-inner">
                      <div class="block-30-content clearfix">
                        <p>{!! $events->long_descp !!}</p>
                       
                      </div>
                      <!-- .block-30-content-->

                      <div class="block-30-quote mv-quote-style-2">
                        <div class="quote-content">Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</div>
                        <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                      </div>
                      <!-- .block-30-quote-->
                      <div class="block-30-quote mv-quote-style-2" style="background: #400303;">
                        <div class="quote-content"> 
                            <audio controls>
                            <source src="{{ asset($events->audio) }}" type="audio/mpeg">
                            Your browser does not support the audio tag.
                          </audio>
                         </div>
                        <div class="quote-icon"><i class="icon fa fa-quote-left"></i></div>
                      </div>

                      <div class="block-30-footer">
                        <div class="mv-dp-table align-top">
                          <div class="mv-dp-table-cell block-30-tag">
                            <div class="mv-btn-group">
                              <div class="group-inner block-30-tag-list"><span class="mv-btn block-30-footer-title"><i class="fa fa-share-alt"></i>&nbsp; Tags:</span><a href="#" class="mv-btn mv-btn-style-22">Helmet</a><a href="#" class="mv-btn mv-btn-style-22">Clothing</a><a href="#" class="mv-btn mv-btn-style-22">Gloves</a></div>
                            </div>
                          </div>
                          <div class="mv-dp-table-cell block-30-social text-right">
                            <div class="mv-social-list-style-1">
                              <ul class="social-ul mv-ul clearfix">
                                <li class="block-30-footer-title"><i class="fa fa-share-alt"></i>&nbsp; Share:</li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- .block-30-footer-->
                    </div>
                  </div>
                </div>
                <!-- .mv-block-style-30-->
              </div>
              <!-- .block-main-content-->
            </div>
            <!-- .mv-c-s-content-->

            <div class="mv-c-s-sidebar col-xs-12 col-md-4 col-lg-3 hidden-xs hidden-sm">
              <div class="mv-c-s-sidebar-inner">
                <div class="mv-aside mv-aside-search">
                  <div class="aside-title mv-title-style-11">search</div>
                  <div class="aside-body">
                    <form method="GET" class="form-aside-search">
                      <div class="mv-inputbox-icon right">
                        <input type="text" name="test138" class="mv-inputbox mv-inputbox-style-2"/>
                        <button type="submit" class="icon mv-btn mv-btn-style-4 fa fa-search"></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- .mv-aside-search-->

                <div class="mv-aside mv-aside-category-blog">
                  <div class="aside-title mv-title-style-11">category blog</div>
                  <div class="aside-body">
                    <nav class="mv-menu-style-2">
                      <ul>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">News </span><span class="mv-col-right menu-number">78</span></a></li>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">All time Champions</span><span class="mv-col-right menu-number">38</span></a></li>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">Starting Lineup </span><span class="mv-col-right menu-number">16</span></a></li>
                        <li class="active"><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">Driver Averages </span><span class="mv-col-right menu-number">95</span></a></li>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">Past race Winners </span><span class="mv-col-right menu-number">27</span></a></li>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">Final Practice Speeds </span><span class="mv-col-right menu-number">39</span></a></li>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">2015 Driver ratings </span><span class="mv-col-right menu-number">50</span></a></li>
                        <li><a href="#" class="mv-col-wrapper"><span class="mv-col-left menu-text mv-icon-left-style-5">Loop data</span><span class="mv-col-right menu-number">10</span></a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-category-blog-->

                <div class="mv-aside mv-aside-recent-posts">
                  <div class="aside-title mv-title-style-11">recent posts</div>
                  <div class="aside-body">
                    <div class="recent-posts-list">
                      <div class="mv-block-style-24">
                        <div class="block-24-list">
                          <article class="item item-aside-recent-posts post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="blog-detail.html" title="Open Face Helmets"><span style="background-image: url(images/demo/demo_300x400.png);" class="block-24-thumb-img"></span></a><a href="images/demo/demo_300x400.png" data-lightbox-href="blog-detail.html" title="Open Face Helmets" class="mv-btn mv-lightbox-item"><i class="icon fa fa-share-square-o"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="blog-detail.html" title="Edwards catches the magic">Edwards catches the magic</a></div>
                                  <ul class="block-24-meta mv-ul">
                                    <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text">Mr. Snow</span></a></li>
                                    <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-comments-o"></i></span>138</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->

                          <article class="item item-aside-recent-posts post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="blog-detail.html" title="Spada Enforcer WP"><span style="background-image: url(images/demo/demo_300x400.png);" class="block-24-thumb-img"></span></a><a href="images/demo/demo_300x400.png" data-lightbox-href="blog-detail.html" title="Spada Enforcer WP" class="mv-btn mv-lightbox-item"><i class="icon fa fa-share-square-o"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="blog-detail.html" title="Logano thwarts Harvick">Logano thwarts Harvick</a></div>
                                  <ul class="block-24-meta mv-ul">
                                    <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text">Mr. Snow</span></a></li>
                                    <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-comments-o"></i></span>138</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->

                          <article class="item item-aside-recent-posts post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                                <div class="mv-dp-table-cell block-24-thumb">
                                  <div class="thumb-inner mv-lightbox-style-1"><a href="blog-detail.html" title="Richa Drift Water"><span style="background-image: url(images/demo/demo_300x400.png);" class="block-24-thumb-img"></span></a><a href="images/demo/demo_300x400.png" data-lightbox-href="blog-detail.html" title="Richa Drift Water" class="mv-btn mv-lightbox-item"><i class="icon fa fa-share-square-o"></i></a></div>
                                </div>
                                <div class="mv-dp-table-cell block-24-main">
                                  <div class="block-24-title"><a href="blog-detail.html" title="Hamlin fights back to win">Hamlin fights back to win</a></div>
                                  <ul class="block-24-meta mv-ul">
                                    <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text">Mr. Snow</span></a></li>
                                    <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-comments-o"></i></span>138</span></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->
                        </div>
                      </div>
                      <!-- .mv-block-style-24-->
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-recent-posts-->

                <div class="mv-aside mv-aside-tags">
                  <div class="aside-title mv-title-style-11">tags</div>
                  <div class="aside-body">
                    <div class="tag-list">
                      <div class="mv-btn-group">
                        <div class="group-inner"><a href="#" class="mv-btn mv-btn-style-22">Helmet</a><a href="#" class="mv-btn mv-btn-style-22 active">Gloves</a><a href="#" class="mv-btn mv-btn-style-22">Sercurity</a><a href="#" class="mv-btn mv-btn-style-22">Boots</a><a href="#" class="mv-btn mv-btn-style-22">Clothing</a><a href="#" class="mv-btn mv-btn-style-22">Luggage</a><a href="#" class="mv-btn mv-btn-style-22">Maintenance</a><a href="#" class="mv-btn mv-btn-style-22">Bodywork</a><a href="#" class="mv-btn mv-btn-style-22">Gift</a><a href="#" class="mv-btn mv-btn-style-22">Exhauts</a><a href="#" class="mv-btn mv-btn-style-22">Tyres</a><a href="#" class="mv-btn mv-btn-style-22">Casual Wear</a><a href="#" class="mv-btn mv-btn-style-22">R&G Racing</a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- .mv-aside-tags-->
                <!-- .mv-aside-most-view-->
              </div>
            </div>
            <!-- .mv-c-s-sidebar-->
          </div>
        </div>
      </section>
      <!-- .mv-main-body-->

      <section class="main-newsletter mv-newsletter-style-1 mv-wrap">
        <div style="background-image: url(images/background/demo_bg_1920x1680.png)" class="newsletter-bg">
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