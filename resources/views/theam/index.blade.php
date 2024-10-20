@extends('frontand.master')
@section('content')
<style>
  @media only screen and (max-width: 600px) {
  .brand_cart_responsip{
    width: 170px!important;
  }
}
</style>
    <!--slider wrapper end-->
      <section class="home-1-slideshow mv-wrap">
        <div id="home-1-slideshow" class="mv-caroufredsel">
          <ul class="mv-slider-wrapper">
          @foreach($sliders as $slider)
            <li class="mv-slider-item"><img src="{{ asset('images/slider/'. $slider->image)  }}" alt="slide" class="mv-slider-img"/>
              <div class="mv-caption-style-1">
                <div class="container">
                  <div class="caption-1-text-1">Best Sale</div>
                  <div class="caption-1-text-2">
                    <div class="mv-title-style-1">the black phantom</div>
                  </div><a href="product-grid-3.html" class="caption-1-button-1 mv-btn mv-btn-style-1 responsive-btn-1-type-2"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">shop now</span></span></a>
                </div>
              </div>
            </li>
            <!-- .mv-slider-item-->
            @endforeach
          </ul>
          <button id="home-1-slideshow-prev" type="button" class="mv-slider-control-btn prev mv-btn mv-btn-style-2"><span class="icon fa fa-angle-left"></span></button>
          <button id="home-1-slideshow-next" type="button" class="mv-slider-control-btn next mv-btn mv-btn-style-2"><span class="icon fa fa-angle-right"></span></button>
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
      
      <section class="home-3-logo-brand mv-wrap" style="background:#1c0202;">
        <div class="container" style="margin-top:50px">
          <div class="logo-brand-main">
            <div class="mv-block-style-17">
              <div id="home-3-logo-brand-slider" class="home-3-logo-brand-slider mv-caroufredsel">
                <div class="block-17-slider-inner">
                  <div class="row">
                    <ul class="mv-slider-wrapper" style="z-index:1050!important;">
                    @foreach($brand as $item)
                      <li class="mv-slider-item brand_cart_responsip col-xs-6 col-sm-4 col-md-2">
                        <div class="mv-dp-table align-middle slider-item-inner">
                          <div class="mv-dp-table-cell"><a  target="_blank"><img style="border-radius: 123px;" src="{{ asset('images/brand/'. $item->image)  }}" alt="logo_brand"/></a></div>
                        </div>

                          <div class="show-newsletter">
                            <div class="text-center"><a href="#" data-toggle="modal" data-target="#popupNewsletter{{ $item->id }}" class="mv-btn mv-btn-style-5">{{$item->title}}</a></div>
                          </div>

                        <div id="popupNewsletter{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="true" class="popup-newsletter modal fade modal-full-width modal-middle modal-effect-zoom mv-modal-style-1">
                          <div class="container h-full">
                            <div class="modal-dialog-wrapper">
                              <div class="modal-dialog">
                                <div class="modal-dialog-inner">
                                  <div class="modal-content">
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="mv-btn mv-btn-style-4 modal-close"><i class="fa fa-close"></i></button>
                                    <div class="content-hover">
                                      <div class="content-button mv-btn-group text-center">
                                        <div class="group-inner">
                                        <a class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('products', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Shops</span></span></a>
                                          <a  class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('musics', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Musics</span></span></a>
                                          <a  class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('events', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Events</span></span></a>
                                          <a class="mv-btn mv-btn-style-1" style="width: 270px;background-image:none!important" href="{{route('brand.profile', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Profile</span></span></a>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </div>
                  <!-- .block-17-main-inner-->
                  <button id="home-3-logo-brand-slider-prev" type="button" class="mv-slider-control-btn prev mv-btn mv-btn-style-3 responsive-btn-3-type-1 hidden-lg"><i class="btn-icon fa fa-angle-left"></i></button>
                  <button id="home-3-logo-brand-slider-next" type="button" class="mv-slider-control-btn next mv-btn mv-btn-style-3 responsive-btn-3-type-1 hidden-lg"><i class="btn-icon fa fa-angle-right"></i></button>
                </div>
                <!-- .block-17-main-->
              </div>
              <!-- .home-3-logo-brand-slider-->
            </div>
            <!-- .mv-block-style-17-->
          </div>
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
                          <div class="content-desc"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">{{$product->brand->title}}</a></div>
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
                                        <div class="content-price"><span class="new-price"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">{{ $product->price }}</a></span></div>
                                            <del class="old-price text-danger float-right">&#2547; {{ $product->price }}</del>
                                        </div>
                                    @else
                                        <div class="content-price">
                                            <span class="new-price">&#2547; {{ $product->price }}</span>
                                            <div class="content-price"><span class="new-price"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">{{ $product->price }}</a></span></div>
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

      <section class="mv-main-body product-grid-4-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
        <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">All Featured Products</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          <div class="row mv-list-product-wrapper mv-block-style-9" style="margin-top:40px">
            <div class="block-9-list mv-list-product">
            @foreach($products as $product)
              <article class="col-xs-6 col-sm-4 col-md-3 item item-product-grid-3 post">
                <div class="item-inner mv-effect-translate-1 mv-box-shadow-gray-1">
                  <div style="background-color: #fff;" class="content-thumb">
                    <div class="thumb-inner mv-effect-relative"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt"><img src="{{asset($product->image)}}" alt="demo" class="mv-effect-item"/></a><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

                      <div class="content-message mv-message-style-1">
                        <div class="message-inner"></div>
                      </div>

                      <div onclick="$(this).remove()" class="content-sale-off mv-label-style-2 text-center">
                        <div class="label-2-inner">
                          <ul class="label-2-ul">
                            <li class="number">-25%</li>
                            <li class="text">sale</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="content-default">
                    <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                      <div class="rate-inner mv-f-14">
                        <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                        <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                      </div>
                    </div>

                    @if($product->discount_price)
                              <ins class="content-price" style="color: #7f00ff;">   </ins>
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->discount_price }}</span><del class="old-price text-danger float-right" > &#2547; {{ $product->price }} </del></div>
                              @else
                              <div class="content-price"><span class="new-price">&#2547; {{ $product->price }}</span></div>
                          @endif
                    <div class="content-desc"><a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
                  </div>

                  <div class="content-hover">
                    <div class="content-button mv-btn-group text-center">
                      <div class="group-inner">
                        <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                        <a href="{{ route('single.product', [$product->id, Str::slug($product->title)]) }}" type="button" class="mv-btn mv-btn-style-1 btn-1-h-40 responsive-btn-1-type-1 btn-compare"><span class="btn-inner"><i class="btn-icon fa fa-signal"></i><span class="btn-text">Dedatils</span></span></a>
                        <button type="button" class="mv-btn mv-btn-style-3 btn-3-h-40 responsive-btn-3-type-1 btn-add-to-cart"><i class="fa fa-cart-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <!-- .post-->
              @endforeach
            </div>
          </div>
          <!-- .mv-list-product-wrapper-->

          <div class="mv-pagination-wrapper">
            <div class="mv-pagination-style-1 has-count-post">
              <div class="count-post mv-title-style-10"><span class="number">12</span> Products of <span class="number">5</span> Pages</div>
              <ul class="pagination">
                <li class="prev"><a href="#">prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a>3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="next"><a href="#">next</a></li>
              </ul>
            </div>
            <!-- .mv-pagination-style-1-->
          </div>
          <!-- .mv-pagination-wrapper-->
        </div>
      </section>
      <!-- .mv-main-body-->
      <!-- .home-3-new-trending-item-->
      <section class="home-3-shop mv-wrap">
        <div class="container-fluid">
          <div class="mv-block-style-14">
            <div class="block-14-main text-center">
              <div class="block-14-content mv-title-style-3 f-300">
                <div class="title-3-text"><span class="behind">shock</span>
                <!-- <span class="main"> <span class="sub-2">discount</span><span>shock</span><span class="sub">Moletom Alpinnestars Headline Preto</span></span> -->
              </div>
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