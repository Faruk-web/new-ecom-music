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
                    <div class="mv-title-style-1"><img src="{{ asset('images/slider/'. $slider->image)  }}" alt="icon" class="line-left"/><img src="{{ asset('images/slider/'. $slider->image)  }}" alt="icon" class="line-right"/>Deal special</div>
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

      <section class="home-4-what-hots mv-wrap">
        <div class="what-hots-title">
          <div class="container-fluid">
            <div class="mv-title-style-4 title-main-inside text-right">
              <div class="title-4-text"><span class="behind">new arrivals</span><span class="main">Brands</span></div>
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
                          <a class="mv-btn mv-btn-style-1 "><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Shops</span></span></a>
                            <a  class="mv-btn mv-btn-style-1  "><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Musics</span></span></a>
                            <a  class="mv-btn mv-btn-style-1 "><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Events</span></span></a>
                            <a class="mv-btn mv-btn-style-1"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Profile</span></span></a>
                           
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
      </section>


      <!-- .home-3-logo-brand-->
      <section class="home-3-new-trending-item mv-wrap">
        <div class="container-fluid">
          <div class="new-trending-item-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">featured products</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
          </div>
          <!-- .new-trending-item-title-->

          <div class="new-trending-item-main">
            <div id="home-3-new-trending-item-slider" class="mv-scrollbar-slider-style-1">
              <div class="row mv-block-style-2">
                <div class="swiper-container">
                  <div class="swiper-wrapper block-2-list">
                  @foreach($vendor_products as $product)
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

      <section class="home-3-highlight mv-wrap">
        <div class="container-fluid">
          <div class="mv-block-style-13">
            <div class="row block-13-list">
              <article class="col-xs-6 col-md-4 item post">
                <div class="mv-col-wrapper item-inner mv-effect-translate-right-left">
                  <div class="mv-col block-13-col-thumb">
                    <div class="block-13-col-inner">
                      <div class="block-13-thumb mv-effect-relative"><a href="product-detail.html" title="Polo Shirt - Black" class="block-13-thumb-link"><img src="images/demo/demo_300x400.png" alt="demo" class="block-13-thumb-img mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="block-13-thumb-img mv-effect-item"/></a><a href="product-detail.html" title="Polo Shirt - Black" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a></div><img src="images/demo/demo_120x40.png" alt="demo" onclick="$(this).remove()" class="block-13-logo"/>
                    </div>
                  </div>

                  <div class="mv-col block-13-col-main">
                    <div class="block-13-main">
                      <div class="block-13-model"><a href="product-detail.html" title="Polo Shirt - Black" class="mv-overflow-ellipsis">rst race</a></div>
                      <div class="block-13-name"> <a href="product-detail.html" title="Polo Shirt - Black">Polo Shirt - Black</a></div>
                      <div class="block-13-desc hidden-xs">Lorem ipsum dolor sit amet, consectincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                      <div class="block-13-price">
                        <div class="old-price">$ 79.99</div>
                        <div class="new-price">$ 50.00</div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-xs-6 col-md-4 item post">
                <div class="mv-col-wrapper item-inner mv-effect-translate-right-left">
                  <div class="mv-col block-13-col-thumb">
                    <div class="block-13-col-inner">
                      <div class="block-13-thumb mv-effect-relative"><a href="product-detail.html" title="Evo CE Boots - Green" class="block-13-thumb-link"><img src="images/demo/demo_300x400.png" alt="demo" class="block-13-thumb-img mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="block-13-thumb-img mv-effect-item"/></a><a href="product-detail.html" title="Evo CE Boots - Green" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a></div><img src="images/demo/demo_120x40.png" alt="demo" onclick="$(this).remove()" class="block-13-logo"/>
                    </div>
                  </div>

                  <div class="mv-col block-13-col-main">
                    <div class="block-13-main">
                      <div class="block-13-model"><a href="product-detail.html" title="Evo CE Boots - Green" class="mv-overflow-ellipsis">Tractech</a></div>
                      <div class="block-13-name"> <a href="product-detail.html" title="Evo CE Boots - Green">Evo CE Boots - Green</a></div>
                      <div class="block-13-desc hidden-xs">Lorem ipsum dolor sit amet, consectincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                      <div class="block-13-price">
                        <div class="old-price">$ 129.99</div>
                        <div class="new-price">$ 120.00</div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <article class="col-xs-6 col-md-4 item post">
                <div class="mv-col-wrapper item-inner mv-effect-translate-right-left">
                  <div class="mv-col block-13-col-thumb">
                    <div class="block-13-col-inner">
                      <div class="block-13-thumb mv-effect-relative"><a href="product-detail.html" title="Matt Black" class="block-13-thumb-link"><img src="images/demo/demo_300x400.png" alt="demo" class="block-13-thumb-img mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="block-13-thumb-img mv-effect-item"/></a><a href="product-detail.html" title="Matt Black" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a></div><img src="images/demo/demo_120x40.png" alt="demo" onclick="$(this).remove()" class="block-13-logo"/>
                    </div>
                  </div>

                  <div class="mv-col block-13-col-main">
                    <div class="block-13-main">
                      <div class="block-13-model"><a href="product-detail.html" title="Matt Black" class="mv-overflow-ellipsis">AGV K-3 SV</a></div>
                      <div class="block-13-name"> <a href="product-detail.html" title="Matt Black">Matt Black</a></div>
                      <div class="block-13-desc hidden-xs">Lorem ipsum dolor sit amet, consectincidunt ut laoreet dolore magna aliquam erat volutpat. </div>
                      <div class="block-13-price">
                        <div class="old-price">$ 234.99</div>
                        <div class="new-price">$ 200.00</div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <!-- .mv-block-style-13-->
        </div>
      </section>
      <!-- .home-3-highlight-->

      <section class="home-3-featured-products mv-wrap">
        <div class="container">
          <div class="featured-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">featured products</span></div>
          </div>
          <!-- .featured-title-->

          <div class="featured-main mv-filter-style-2">
            <div class="filter-button mv-btn-group">
              <div class="group-inner">
                <button data-filter=".motor" class="mv-btn mv-btn-style-8 active">motor</button>
                <button data-filter=".helmet" class="mv-btn mv-btn-style-8">helmet</button>
                <button data-filter=".boots" class="mv-btn mv-btn-style-8">boots</button>
                <button data-filter=".protection" class="mv-btn mv-btn-style-8">protection</button>
                <button data-filter=".gear" class="mv-btn mv-btn-style-8">gear</button>
                <button data-filter=".tires" class="mv-btn mv-btn-style-8">tires</button>
              </div>
            </div>
            <!-- .filter-button-->

            <div class="row filter-list-warpper">
              <div class="filter-list mv-block-style-2">
                <div class="block-2-list">
                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post motor">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="{{ asset('/') }}music_source/images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post motor">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="Rev'it Cyclone Waterproof Jacket - Neon Yellow" class="mv-overflow-ellipsis">Rev'it Cyclone Waterproof Jacket - Neon Yellow</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post motor">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post motor">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="{{ asset('/') }}music_source/images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post helmet">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post boots">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post boots">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post boots">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post boots">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post boots">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post protection">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post protection">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post gear">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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

                  <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post tires">
                    <div class="item-inner mv-effect-translate-right-left">
                      <div class="content-default">
                        <div class="content-thumb">
                          <div class="thumb-inner mv-effect-relative"><a href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item active"/><img src="images/demo/demo_300x400.png" alt="demo" class="mv-effect-item"/></a><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-btn mv-btn-style-25 btn-readmore-plus hidden-xs"><span class="btn-inner"></span></a>

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
                          <div class="label-inner">-25%</div>
                        </div>
                      </div>

                      <div class="content-main">
                        <div class="content-text">
                          <div class="content-price"><span class="new-price">$ 128.24</span></div>
                          <div class="content-desc"><a href="product-detail.html" title="RST Full Zipped Sweatshirt" class="mv-overflow-ellipsis">RST Full Zipped Sweatshirt</a></div>
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
                </div>
              </div>
            </div>
            <!-- .filter-list-wrapper-->
          </div>
          <!-- .featured-main-->
        </div>
      </section>
      <!-- .home-3-featured-products-->

      <section class="home-3-shop mv-wrap">
        <div class="container-fluid">
          <div class="mv-block-style-14">
            <div class="block-14-main text-center"><img src="images/demo/demo_170x60.png" alt="demo" class="img-top"/>
              <div class="block-14-content mv-title-style-3 f-300">
                <div class="title-3-text"><span class="behind">shock</span><span class="main"> <span class="sub-2">discount</span><span>shock</span><span class="sub">Moletom Alpinnestars Headline Preto</span></span></div>
              </div><a href="product-grid-3.html" class="mv-btn mv-btn-style-1 responsive-btn-1-type-2 shop-now-button"><span class="btn-inner"><i class="btn-icon fa fa-cart-plus"></i><span class="btn-text">shop now</span></span></a>
            </div>
            <!-- .block-14-main-->
            <img src="images/demo/demo_370x530.png" alt="demo" class="block-14-img left hidden-xs hidden-sm"/><img src="images/demo/demo_370x530.png" alt="demo" class="block-14-img right hidden-xs hidden-sm"/>
          </div>
          <!-- .mv-block-style-14-->
        </div>
      </section>
      <!-- .home-3-shop-->

      

      <section class="home-3-latest-news mv-wrap">
        <div class="container">
          <div class="latest-news-title mv-title-style-2 title-home-3">
            <div class="title-2-inner"><img src="images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">Latest blogs</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod <br/>tincidunt ut laoreet dolore magna aliquam erat volutpat</span></div>
          </div>
          <!-- .latest-news-title-->

          <div class="latest-news-main">
            <div class="latest-news-list">
              <div class="mv-block-style-15">
                <div class="row block-15-list mv-list-blog">
                  <article class="col-xs-6 col-sm-4 item item-home-3-latest-news post">
                    <div class="item-inner">
                      <div class="item-inner-relative">
                        <div class="block-15-thumb">
                          <div class="block-15-thumb-inner mv-effect-relative"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea"><span style="background-image: url(images/demo/demo_400x280.png);" class="block-15-thumb-img"></span></a><span class="polygon hidden-xs hidden-sm"></span><span onclick="$(this).remove()" class="block-15-date mv-date-style-1 hidden-xs hidden-sm"><span class="day">29</span><span class="month">sep</span></span></div>
                        </div>
                        <!-- .block-15-thumb-->

                        <div class="block-15-main">
                          <div class="block-15-main-inner">
                            <div class="block-15-title"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-overflow-ellipsis">Lamcorper suscipit lobortis nisl ut aliquip ex ea</a></div>
                            <ul class="block-15-meta mv-ul">
                              <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"><span class="icon"><i class="fa fa-pencil-square-o"></i></span>Tony Jahson</span></a></li>
                              <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="icon"><i class="fa fa-comments-o"></i></span><span class="text">150</span></a></li>
                              <li class="meta-item mv-icon-left-style-3 hidden-md hidden-lg"><a href="#"><span class="icon"><i class="fa fa-calendar"></i></span><span class="text">Sep 29, 2016</span></a></li>
                            </ul>
                            <div class="block-15-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</div>
                            <div class="block-15-read-more"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span class="btn-inner"><i class="btn-icon fa fa-long-arrow-right"></i><span class="btn-text">read more</span></span></a></div>
                          </div>
                        </div>
                        <!-- .block-15-main-->
                      </div>
                    </div>
                  </article>
                  <!-- .post-->

                  <article class="col-xs-6 col-sm-4 item item-home-3-latest-news post">
                    <div class="item-inner">
                      <div class="item-inner-relative">
                        <div class="block-15-thumb">
                          <div class="block-15-thumb-inner mv-effect-relative"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea"><span style="background-image: url(images/demo/demo_400x280.png);" class="block-15-thumb-img"></span></a><span class="polygon hidden-xs hidden-sm"></span><span onclick="$(this).remove()" class="block-15-date mv-date-style-1 hidden-xs hidden-sm"><span class="day">29</span><span class="month">sep</span></span></div>
                        </div>
                        <!-- .block-15-thumb-->

                        <div class="block-15-main">
                          <div class="block-15-main-inner">
                            <div class="block-15-title"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-overflow-ellipsis">Lamcorper suscipit lobortis nisl ut aliquip ex ea</a></div>
                            <ul class="block-15-meta mv-ul">
                              <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"><span class="icon"><i class="fa fa-pencil-square-o"></i></span>Tony Jahson</span></a></li>
                              <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="icon"><i class="fa fa-comments-o"></i></span><span class="text">150</span></a></li>
                              <li class="meta-item mv-icon-left-style-3 hidden-md hidden-lg"><a href="#"><span class="icon"><i class="fa fa-calendar"></i></span><span class="text">Sep 29, 2016</span></a></li>
                            </ul>
                            <div class="block-15-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</div>
                            <div class="block-15-read-more"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span class="btn-inner"><i class="btn-icon fa fa-long-arrow-right"></i><span class="btn-text">read more</span></span></a></div>
                          </div>
                        </div>
                        <!-- .block-15-main-->
                      </div>
                    </div>
                  </article>
                  <!-- .post-->

                  <article class="col-xs-6 col-sm-4 item item-home-3-latest-news post hidden-xs">
                    <div class="item-inner">
                      <div class="item-inner-relative">
                        <div class="block-15-thumb">
                          <div class="block-15-thumb-inner mv-effect-relative"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea"><span style="background-image: url(images/demo/demo_400x280.png);" class="block-15-thumb-img"></span></a><span class="polygon hidden-xs hidden-sm"></span><span onclick="$(this).remove()" class="block-15-date mv-date-style-1 hidden-xs hidden-sm"><span class="day">29</span><span class="month">sep</span></span></div>
                        </div>
                        <!-- .block-15-thumb-->

                        <div class="block-15-main">
                          <div class="block-15-main-inner">
                            <div class="block-15-title"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-overflow-ellipsis">Lamcorper suscipit lobortis nisl ut aliquip ex ea</a></div>
                            <ul class="block-15-meta mv-ul">
                              <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"><span class="icon"><i class="fa fa-pencil-square-o"></i></span>Tony Jahson</span></a></li>
                              <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="icon"><i class="fa fa-comments-o"></i></span><span class="text">150</span></a></li>
                              <li class="meta-item mv-icon-left-style-3 hidden-md hidden-lg"><a href="#"><span class="icon"><i class="fa fa-calendar"></i></span><span class="text">Sep 29, 2016</span></a></li>
                            </ul>
                            <div class="block-15-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet</div>
                            <div class="block-15-read-more"><a href="blog-detail.html" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span class="btn-inner"><i class="btn-icon fa fa-long-arrow-right"></i><span class="btn-text">read more</span></span></a></div>
                          </div>
                        </div>
                        <!-- .block-15-main-->
                      </div>
                    </div>
                  </article>
                  <!-- .post-->
                </div>
              </div>
              <!-- .mv-block-style-15-->
            </div>
          </div>
          <!-- .latest-news-main-->
        </div>
      </section>
      <!-- .home-3-latest-news-->

      <section class="home-3-testimonial mv-wrap">
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