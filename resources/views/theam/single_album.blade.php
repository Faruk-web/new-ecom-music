@extends('frontand.master')
@section('content')
@php
    $discount = 0;
    if(Session::has('coupon_discount')){
        $discount = Session::get('coupon_discount');
    }
@endphp

        <section class="main-banner mv-wrap">
                <div data-image-src="{{asset('images/album/'.$album->banner )}}" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
                <div class="page-name mv-caption-style-6">
                    <div class="container">
                    <div class="mv-title-style-9"><span class="main">album detail</span></div>
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
              <li><a href="#">album</a></li>
              <li><a>album detail</a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->
      <section class="home-3-new-trending-item mv-wrap" >
        <div class="container-fluid" style="background:#1c0202;">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner" style="margin-top: 35px;"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">featured products</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          <!-- .new-trending-item-title-->

          <div class="new-trending-item-main">
            <div id="home-3-new-trending-item-slider" class="mv-scrollbar-slider-style-1">
              <div class="row mv-block-style-2">
                <div class="swiper-container">
                  <div class="swiper-wrapper block-2-list">
                  @foreach($products as $product)
                    <article class="col-xs-6 item item-filter-home-3 post swiper-slide">
                      <div class="item-inner mv-effect-translate-right-left">
                        <div class="content-default">
                          <div class="content-thumb">
                            <div class="thumb-inner mv-effect-relative"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt"><img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item active"/><img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item"/></a><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

                              <div class="content-message mv-message-style-1">
                                <div class="message-inner"></div>
                              </div>
                            </div>
                          </div>

                          <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                            <div class="rate-inner mv-f-14 text-left">
                              <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                              <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                            </div>
                          </div>

                          <div class="content-sale-off mv-label-style-4 label-primary">
                            <div class="label-inner">-15%</div>
                          </div>
                        </div>

                        <div class="content-main">
                          <div class="content-text">
                          @if($product->discount_price)
                              <ins class="content-price" style="color: #7f00ff;">   </ins>
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->discount_price }}</span><del class="old-price text-danger float-right" > &#2547; {{ $product->price }} </del></div>
                              @else
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->price }}</span></div>
                          @endif
                            
                            <div class="content-desc"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">{{$product->title}}</a></div>
                          </div>
                        </div>

                        <div class="content-hover">
                          <div class="content-button mv-btn-group text-center">
                            <div class="group-inner">
                              <button type="button" title="Add To Wishlist" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                              <button type="button" title="Compare" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare"><i class="fa fa-signal"></i></button>
                              <button type="button" title="Add To Cart" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                    <!-- .post-->
                    @endforeach
                  </div>
                  <!-- .swiper-wrapper-->
                  <div class="swiper-scrollbar"></div>
                  <!-- .swiper-scrollbar-->
                </div>
              </div>
            </div>
            <!-- #home-3-new-trending-item-slider-->
          </div>
          <!-- .new-trending-item-main-->
        </div>
      </section>
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
                          <div class="block-30-title">{{$album->title}}</div>
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
                              <div class="slick-slide-inner"><img src="{{asset('images/album/'.$album->image )}}" alt="demo" class="block-40-main-img"/></div>
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
                        <p>{{$album->short_descp}}</p>
                        
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
                                <source src="{{asset($album->video)}}" type="video/mp4">
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
                        <p>{!! $album->long_descp !!}</p>
                       
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
                            <source src="{{ asset($album->audio) }}" type="audio/mpeg">
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
                  <div class="aside-title mv-title-style-11">category album muisc</div>
                  <div class="aside-body">
                    <nav class="mv-menu-style-2">
                      <ul>
                        @foreach($media as $item)
                        <li> <audio width="235" height="140" controls>
                        <source src="{{ asset($item->audio) }}" type="audio/mpeg">
                        Your browser does not support the audio tag.
                      </audio></li>
                        @endforeach
                      </ul>
                    </nav>
                  </div>
                </div>
                <!-- .mv-aside-category-blog-->

                <div class="mv-aside mv-aside-recent-posts">
                  <div class="aside-title mv-title-style-11">category album video</div>
                  <div class="aside-body">
                    <div class="recent-posts-list">
                      <div class="mv-block-style-24">
                        <div class="block-24-list">
                        @foreach($media as $item)
                          <article class="item item-aside-recent-posts post">
                            <div class="item-inner">
                              <div class="mv-dp-table">
                              <video width="300" height="140" controls>
                                      <source src="{{asset($item->video)}}" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                              </div>
                            </div>
                          </article>
                          <!-- .post-->
                          @endforeach
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