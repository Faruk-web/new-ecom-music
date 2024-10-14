@extends('frontand.master')
@section('content')
    <!--slider wrapper end-->
    <section class="home-3-slideshow mv-wrap">
        <div id="home-3-slideshow" class="mv-caroufredsel">
          <ul class="mv-slider-wrapper">
          @foreach($sliders as $slider)
            <li class="mv-slider-item"><img src="{{ asset('images/slider/'. $slider->image)  }}" alt="slide" class="mv-slider-img"/>
              <div class="mv-caption-style-3">
                <div class="container"><img src="{{ asset('images/slider/'. $slider->image)  }}" alt="icon" class="caption-3-img-1"/>
                  <div class="caption-3-text-1"></div>
                  <div class="caption-3-text-2">
                    <div class="mv-title-style-1">Deal special</div>
                  </div><a href="product-grid-3.html" class="caption-3-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">shop now</span></span></a>
                </div>
              </div>
            </li>
            @endforeach
            <!-- .mv-slider-item-->
            <!-- .mv-slider-item-->
          </ul>
        </div>
      </section>
      <!-- .home-3-slideshow-->
      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="home.html"><i class="fa fa-home"></i></a></li>
              <li><a href="#">Home Page</a></li>
              <li><a>Home Page detail</a></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="home-4-what-hots mv-wrap" >
      <div class="container-fluid" style="background:#1c0202;">
        <div class="what-hots-title">
          <div class="container-fluid">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner" style="margin-top: 70px;"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">Bands</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          </div>

          <div class="slider-control-wrapper">
            <div class="container">
              <div class="mv-btn-group text-left">
                <div class="group-inner">
                  <button id="home-4-what-hots-slider-prev" type="button" class="mv-slider-control-btn prev mv-btn mv-btn-style-4"><img src="{{ asset('/') }}music_source/images/icon/icon_long_arrow_left_2.png" alt="icon" class="icon"/></button>
                  <button id="home-4-what-hots-slider-next" type="button" class="mv-slider-control-btn next mv-btn mv-btn-style-4"><img src="{{ asset('/') }}music_source/images/icon/icon_long_arrow_right_4.png" alt="icon" class="icon"/></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .what-hots-title-->

        <div class="what-hots-main">
          <div class="container">
            <div class="what-hots-main-inner mv-block-style-2">
              <div id="home-4-what-hots-slider" class="row mv-caroufredsel">
                <div class="mv-slider-wrapper block-2-list">

                @foreach($brand as $item)
                  <article class="col-xs-6 col-md-3 item item-filter-home-4 post mv-slider-item">
                    <div class="item-inner mv-effect-zoom-in-out">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="{{ asset('images/brand/'. $item->image)  }}" alt="demo" class="mv-effect-item active"/><img src="{{ asset('images/brand/'. $item->image)  }}" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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

                        <div class="content-sale-off mv-label-style-4 label-dark">
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">{{$item->title}}</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
                        </div>
                      </div>

                      <div class="content-hover">
                        <div class="content-button mv-btn-group text-center">
                          <div class="group-inner">
                          <a class="mv-btn mv-btn-style-1" style="width: 278px;background-image:none!important" href="{{route('products', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Shops</span></span></a>
                            <a  class="mv-btn mv-btn-style-1" style="width: 278px;background-image:none!important" style="width: 278px;" href="{{route('musics', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Musics</span></span></a>
                            <a  class="mv-btn mv-btn-style-1" style="width: 278px;background-image:none!important" href="{{route('events', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Events</span></span></a>
                            <a class="mv-btn mv-btn-style-1" style="width: 278px;background-image:none!important" href="{{route('brand.profile', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Profile</span></span></a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  @endforeach
                  <!-- .post-->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- .what-hots-main-->
        </div>
      </section>

      
      <!-- .home-3-logo-brand-->
      <section class="home-3-new-trending-item mv-wrap" style="background:#1c0202;">
        <div class="container-fluid">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">Featured products</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
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
      <!-- .home-3-new-trending-item-->
       <!-- .home-3-logo-brand-->
      <section class="home-3-new-trending-item mv-wrap" style="background:#1c0202;">
        <div class="container-fluid">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">Limited Edition</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          <!-- .new-trending-item-title-->
          <div class="new-trending-item-main">
            <div id="home-3-new-trending-item-slider" class="mv-scrollbar-slider-style-1">
              <div class="row mv-block-style-2">
                <div class="swiper-container">
                  <div class="swiper-wrapper block-2-list">
                  @foreach($limited_edition as $product)
                    <article class="col-xs-6 item item-filter-home-3 post swiper-slide">
                        <div class="item-inner mv-effect-translate-right-left">
                            <div class="content-default">
                                <div class="content-thumb">
                                    <div class="thumb-inner mv-effect-relative">
                                        <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt">
                                            <img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item active"/>
                                            <img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item"/>
                                        </a>
                                        <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs">
                                            <span class="btn-inner"></span>
                                        </a>

                                        <div class="content-message mv-message-style-1">
                                            <div class="message-inner"></div>
                                        </div>
                                    </div>
                                </div>

                                <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                                    <div class="rate-inner mv-f-14 text-left">
                                        <div class="stars-wrapper empty-stars">
                                            <span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span>
                                        </div>
                                        <div class="stars-wrapper filled-stars">
                                            <span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-sale-off mv-label-style-4 label-primary">
                                    <div class="label-inner">-15%</div>
                                </div>
                            </div>

                            <div class="content-main">
                                <div class="content-text">
                                    @if($product->discount_price)
                                        <ins class="content-price" style="color: #7f00ff;"></ins>
                                        <div class="content-price">
                                            <span class="new-price">&#2547; {{ $product->discount_price }}</span>
                                            <del class="old-price text-danger float-right">&#2547; {{ $product->price }}</del>
                                        </div>
                                    @else
                                        <div class="content-price">
                                            <span class="new-price">&#2547; {{ $product->price }}</span>
                                        </div>
                                    @endif
                                    <div class="content-desc">
                                        <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">{{$product->title}}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="content-hover">
                                <div class="content-button mv-btn-group text-center">
                                    <div class="group-inner">
                                        <button type="button" title="Add To Wishlist" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-wishlist">
                                            <i class="fa fa-heart-o"></i>
                                        </button>
                                        <button type="button" title="Compare" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-compare">
                                            <i class="fa fa-signal"></i>
                                        </button>
                                        <button type="button" title="Add To Cart" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1 btn-add-to-cart">
                                            <i class="fa fa-cart-plus"></i>
                                        </button>
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
      <!-- .home-3-new-trending-item-->
              <!-- .home-3-logo-brand-->
      <section class="home-3-new-trending-item mv-wrap" style="background:#1c0202;">
        <div class="container-fluid">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">Upcoming Events</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          <!-- .new-trending-item-title-->
          <div class="new-trending-item-main">
            <div id="home-3-new-trending-item-slider" class="mv-scrollbar-slider-style-1">
              <div class="row mv-block-style-2">
                <div class="swiper-container">
                  <div class="swiper-wrapper block-2-list">
                  @foreach($events as $product)
                  <article class="col-xs-6 item item-filter-home-3 post swiper-slide">
                    <div class="item-inner mv-effect-translate-top-bottom">
                      <div class="content-thumb">
                        <div class="thumb-inner mv-effect-relative"><a href="{{route('event.details', $product->id)}}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow"><img src="{{asset('images/event/'.$product->image )}}" alt="demo" class="mv-effect-item active"/><img src="{{asset('images/event/'.$product->image )}}" alt="demo" class="mv-effect-item"/></a>
                          <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                            <div class="label-2-inner">
                              <ul class="label-2-ul">
                                <li class="number">-25%</li>
                                <li class="text">sale</li>
                              </ul>
                            </div>
                          </div>

                          <div class="content-message mv-message-style-1">
                            <div class="message-inner"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="content-default">
                      <div class="content-price"><span class="new-price"><a href="{{route('event.details', $product->id)}}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">{{$product->title}}</a></span></div>
                      <div class="content-desc"><a href="{{route('event.details', $product->id)}}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">{{$product->short_descp}}</a></div>
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
      <!-- .home-3-new-trending-item-->
                   <!-- .home-3-logo-brand-->
      <section class="home-3-new-trending-item mv-wrap" style="background:#1c0202;">
        <div class="container-fluid">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">Fan Club</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          <!-- .new-trending-item-title-->
          <div class="new-trending-item-main">
            <div id="home-3-new-trending-item-slider" class="mv-scrollbar-slider-style-1">
              <div class="row mv-block-style-2">
                <div class="swiper-container">
                  <div class="swiper-wrapper block-2-list">
                  @foreach($events as $product)
                  <article class="col-xs-6 item item-filter-home-3 post swiper-slide">
                    <div class="item-inner mv-effect-translate-top-bottom">
                      <div class="content-thumb">
                        <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow"><img src="{{asset('images/event/'.$product->image )}}" alt="demo" class="mv-effect-item active"/><img src="{{asset('images/event/'.$product->image )}}" alt="demo" class="mv-effect-item"/></a>
                          <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                            <div class="label-2-inner">
                              <ul class="label-2-ul">
                                <li class="number">-25%</li>
                                <li class="text">sale</li>
                              </ul>
                            </div>
                          </div>

                          <div class="content-message mv-message-style-1">
                            <div class="message-inner"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="content-default">
                    <div class="content-price"><span class="new-price"><a href="{{route('event.details', $product->id)}}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">{{$product->title}}</a></span></div>
                    <div class="content-desc"><a href="{{route('event.details', $product->id)}}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">{{$product->short_descp}}</a></div>
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
      <!-- .home-3-new-trending-item-->
      <section class="home-3-shop mv-wrap">
        <div class="container-fluid">
          <div class="mv-block-style-14">
            <div class="block-14-main text-center">
              <div class="block-14-content mv-title-style-3 f-300">
                <div class="title-3-text"><span class="behind">shock</span><span class="main"> <span class="sub-2">discount</span><span>shock</span><span class="sub">Moletom Alpinnestars Headline Preto</span></span></div>
              </div><a href="product-grid-3.html" class="mv-btn mv-btn-style-1 responsive-btn-1-type-2 shop-now-button"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">shop now</span></span></a>
            </div>
            <!-- .block-14-main-->
            <img src="{{ asset('/') }}music_source/theme/a1.jpg" alt="demo" class="block-14-img left hidden-xs hidden-sm"/><img src="{{ asset('/') }}music_source/theme/a2.jpg" alt="demo" class="block-14-img right hidden-xs hidden-sm"/>
          </div>
          <!-- .mv-block-style-14-->
        </div>
      </section>
      <!-- .home-3-shop-->

      <section class="home-3-testimonial mv-wrap" style="background:#1c0202;">
        <div class="container">
          <div class="testimonial-main">
            <div class="mv-block-style-16">
              <div id="home-3-testimonial-slider" class="home-3-testimonial-slider mv-caroufredsel">
                <ul class="mv-slider-wrapper">
                  <li class="mv-slider-item">
                    <div class="mv-slider-item-inner">
                      <div class="block-16-box">
                        <div class="block-16-icon-quote"><i class="fa fa-quote-left"></i></div>
                        <div class="block-16-quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </div>
                        <div class="block-16-line"></div>
                        <div class="block-16-name"><a href="#">Peter landt</a></div>
                        <div class="block-16-category">MANAGER MOTOR VERHIKLE</div>
                      </div>
                    </div>
                  </li>
                  <li class="mv-slider-item">
                    <div class="mv-slider-item-inner">
                      <div class="block-16-box">
                        <div class="block-16-icon-quote"><i class="fa fa-quote-left"></i></div>
                        <div class="block-16-quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </div>
                        <div class="block-16-line"></div>
                        <div class="block-16-name"><a href="#">Peter landt</a></div>
                        <div class="block-16-category">MANAGER MOTOR VERHIKLE</div>
                      </div>
                    </div>
                  </li>
                  <li class="mv-slider-item">
                    <div class="mv-slider-item-inner">
                      <div class="block-16-box">
                        <div class="block-16-icon-quote"><i class="fa fa-quote-left"></i></div>
                        <div class="block-16-quote-content">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </div>
                        <div class="block-16-line"></div>
                        <div class="block-16-name"><a href="#">Peter landt</a></div>
                        <div class="block-16-category">MANAGER MOTOR VERHIKLE</div>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="slider-control-arrow mv-btn-group">
                  <div class="group-inner">
                    <button id="home-3-testimonial-slider-prev" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1"><i class="btn-icon fa fa-angle-left"></i></button>
                    <button id="home-3-testimonial-slider-next" class="mv-btn mv-btn-style-3 responsive-btn-3-type-1"><i class="btn-icon fa fa-angle-right"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- .mv-block-style-16-->
          </div>
        </div>
      </section>
      <!-- .home-3-testimonial-->

      

      <section class="main-newsletter mv-newsletter-style-3 mv-wrap">
        <div style="background-image: url(images/background/demo_bg_1920x1680.png)" class="newsletter-bg">
          <div class="container">
            <form method="GET" class="form-newsletter mv-form-horizontal">
              <div class="mv-form-group">
                <label class="col-sm-3 hidden-xs mv-label text-uppercase"><span class="text">Newsletter<span class="label-bg fa fa-envelope-o"></span></span></label>
                <div class="col-xs-12 col-sm-9 mv-field">
                  <div class="mv-inputbox-group has-space">
                    <div class="mv-inputbox mv-inputbox-icon right">
                      <input type="text" name="test138" data-mv-placeholder="Subscribe your email here" placeholder="Subscribe your email here" class="mv-inputbox mv-inputbox-style-4 h-50"/><i class="icon fa fa-paper-plane-o"></i>
                    </div>
                    <div class="inputbox-addon">
                      <button type="button" class="mv-btn mv-btn-block mv-btn-style-14">Subscribe</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- .mv-newsletter-style-3-->
    <!-- partners slider  wrapper end-->

@endsection