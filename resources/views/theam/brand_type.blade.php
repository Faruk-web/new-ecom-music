@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Musics Video & Audio</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a href="product-grid-3.html">Product</a></li>
              <li><a>Musics Video & Audio</a></li>
            </ul>
          </div>
        </div>
      </section>
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
      <!-- .main-breadcrumb-->
      <section class="home-2-news-accessories mv-wrap">
      <div class="container-fluid" style="background:#1c0202;">
        <div class="container" style="margin-top:100px">
          <div class="news-accessories-title mv-title-style-3">
            <div class="title-3-text"><span class="main" style="color:#fff">{{$type}} Bands<span class="sub"></span></span></div>
            <div class="title-3-line"></div>
          </div>
          <!-- .news-accessories-title-->

          <div class="news-accessories-main">
            <div class="mv-block-style-9">
              <div class="row block-9-list">
              @foreach($brand as $item)
              <article class="col-xs-6 col-md-3 item post">
                  <div class="item-inner mv-effect-translate-top-bottom">
                    <div class="content-thumb">
                      <div class="thumb-inner mv-effect-relative"><a data-mv-href="product-detail.html" title="RST Full Zipped Sweatshirt"><img src="{{ asset('images/brand/'. $item->image)}}" alt="demo" class="mv-effect-item active"/><img src="{{ asset('images/brand/'. $item->image)}}" alt="demo" class="mv-effect-item"/></a>
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
                      <div class="content-hover">
                        <div class="content-button mv-btn-group text-center">
                        <div class="group-inner">
                          <a class="mv-btn mv-btn-style-1" style="width: 278px;" href="{{route('products', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Shops</span></span></a>
                            <a  class="mv-btn mv-btn-style-1" style="width: 278px;" style="width: 278px;" href="{{route('musics', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Musics</span></span></a>
                            <a  class="mv-btn mv-btn-style-1" style="width: 278px;" href="{{route('events', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Events</span></span></a>
                            <a class="mv-btn mv-btn-style-1" style="width: 278px;" href="{{route('brand.profile', $item->id)}}"><span class="btn-inner"><i class="btn-icon fa-li fa fa-check"></i><span class="btn-text">Profile</span></span></a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="content-default">
                      <div data-rate="true" data-score="5.0" class="content-rate mv-rate text-center">
                        <div class="rate-inner mv-f-14 text-left">
                          <div class="stars-wrapper empty-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                          <div class="stars-wrapper filled-stars"><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span><span class="item-rate"></span></div>
                        </div>
                      </div>
                      <div class="content-price"><span class="new-price">{{$item->title}}</span></div>
                     
                    </div>
                  </div>
                </article>
                  @endforeach
              </div>
            </div>
          </div>
          <!-- .news-accessories-main-->
        </div> 
     </div>
      </section>

@endsection