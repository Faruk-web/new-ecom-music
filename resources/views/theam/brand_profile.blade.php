@extends('frontand.master')
@section('content')
<style>
  .mv-block-style-34 .block-34-title .text-sub{
       /* position: relative; */
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    font-size: 17px;
    letter-spacing: 0px;
    color: #222;
    z-index: 10;
    margin: -52px -138px;
    text-align: justify;
  }
</style>
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">Brand profile</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
            </div>
          </div>
        </div>
      </section>
      <!-- .main-banner-->

      <section class="main-breadcrumb mv-wrap">
        <div class="mv-breadcrumb-style-1">
          <div class="container">
            <ul class="breadcrumb-1-list">
              <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
              <li><a href="product-grid-3.html">Brand</a></li>
              <li><a>Brand profile</a></li>
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
      <section class="home-3-featured-products mv-wrap" style="background:#1c0202;">
        <div class="container-fluid">
          <div class="container">
            <div class="featured-title mv-title-style-2 title-home-3">
              <div class="title-2-inner" style="margin-top: 35px;">
                <img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/>
                <span class="main">Featured Music</span>
              </div>
            </div>
            <!-- .featured-title-->
            
            <div class="featured-main mv-filter-style-2">
              <div class="filter-button mv-btn-group">
                <div class="group-inner">
                  <button data-filter="*" class="mv-btn mv-btn-style-8 active">All</button> <!-- Show all by default -->
                  @foreach ($category as $cat) <!-- Loop through the categories -->
                    <button data-filter=".{{ strtolower($cat->id) }}" class="mv-btn mv-btn-style-8">{{ $cat->title }}</button>
                  @endforeach
                </div>
              </div>
              <!-- .filter-button-->
              <div class="row filter-list-wrapper">
                <div class="filter-list mv-block-style-2">
                  <div class="block-2-list">
                    @foreach ($category as $cat) <!-- Loop through the categories -->
                      @foreach ($cat->music as $music) <!-- Loop through the music for each category -->
                        <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post {{ strtolower($cat->id) }}">
                          <div class="item-inner mv-effect-translate-right-left">
                            <div class="content-default">
                              <div class="content-thumb">
                                <div class="thumb-inner mv-effect-relative">
                                  <a href="{{ route('events', $music->id) }}" title="{{ $music->title }}">
                                  <video width="320" height="240" controls>
                                      <source src="{{asset($music->video)}}" type="video/mp4">
                                      Your browser does not support the video tag.
                                  </video>
                                  
                                  </a>
                                </div>
                              </div>
                              <div class="content-sale-off mv-label-style-4 label-primary">
                                <div class="label-inner">Hot</div>
                              </div>
                            </div>
                            <div class="content-main">
                              <div class="content-text">
                                <div class="content-price"><span class="new-price">{{$music->video_name}}</span></div>
                              </div>
                            </div>
                          </div>
                        </article>
                      @endforeach
                    @endforeach
                  </div>
                </div>
              </div>
              <!-- .filter-list-wrapper-->
            </div>
            <!-- .featured-main-->
          </div>
        </div>
     </section>
     <section class="home-3-featured-products mv-wrap" style="background:#1c0202;">
      <div class="container-fluid">
        <div class="container">
          <div class="featured-title mv-title-style-2 title-home-3">
            <div class="title-2-inner" style="margin-top: 44px;">
              <img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/>
              <span class="main">Featured Music</span>
            </div>
          </div>
          <!-- .featured-title-->
          <div class="mv-tab-style-2">
            <!-- Tab Navigation -->
            <ul role="tablist" class="nav nav-tabs">
              <li class="active"><a role="tab" data-toggle="tab" href="#tab-all">All Music</a></li>
              @foreach ($category as $index => $cat) <!-- Loop through categories -->
                <li><a role="tab" data-toggle="tab" href="#tab{{ $cat->id }}">{{ $cat->title }}</a></li>
              @endforeach
            </ul>
            <!-- .nav-tabs -->
            <!-- Tab Content -->
            <div class="tab-content">
              <!-- Tab for All Music -->
              <div id="tab-all" class="tab-pane active">
                  @foreach ($category as $cat)
                    @foreach ($cat->music as $music)
                    <div class="row">
                      <!-- Display all music items -->
                      <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 12px;">
                        <div class="music-item">
                        <audio controls width="480" height="240">
                                      <source src="{{ asset($music->audio) }}" type="audio/mpeg">
                                      Your browser does not support the audio tag.
                                    </audio>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2">
                      <span class="price">
                          <!-- .popup-wrapper-->
                            <div class="bars bars2">
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                            </div>
                        </span>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="title-2-inner">
                        <img style="height: 75px;" src="{{ asset('images/music/'.$music->image ) }}" alt="icon" class="icon image-live-view"/>
                        <span class="main" style=" font-size: 22px; color: #40d1af;">{{$music->audio_name}}</span>
                      </div>
                      </div>

                    </div>
                    @endforeach
                  @endforeach
                
              </div>
              <!-- Tabs for Individual Categories -->
              @foreach ($category as $index => $cat)
              <div id="tab{{ $cat->id }}" class="tab-pane">
                
                  @foreach ($cat->music as $music)
                  <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4" style="margin-top: 12px;">
                      <div class="music-item">
                      <audio controls>
                        <source src="{{ asset($music->audio) }}" type="audio/mpeg">
                        Your browser does not support the audio tag.
                      </audio>
                      </div>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2">
                        <span class="price">
                          <!-- .popup-wrapper-->
                            <div class="bars bars2">
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                              <div class="bar"></div>
                            </div>
                        </span>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="title-2-inner">
                      <img style="height: 75px;" src="{{ asset('images/music/'.$music->image ) }}" alt="icon" class="icon image-live-view"/>
                      <span class="main" style=" font-size: 22px; color: #40d1af;">{{$music->audio_name}}</span>
                    </div>
                    </div>
                    </div>
                  @endforeach
                
              </div>
              @endforeach
            </div>
            <!-- .tab-content -->
          </div>
          <!-- .mv-tab-style-2-->
        </div>
      </div>
    </section>

    <section class="mv-main-body blog-3-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
        <div class="featured-title mv-title-style-2 title-home-3">
            <div class="title-2-inner">
              <img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/>
              <span class="main">Album</span>
            </div>
          </div>
          <div class="mv-list-blog-wrapper mv-block-style-15">
            <div class="row block-15-list mv-list-blog">
            @foreach($album as $product)
              <article class="col-xs-6 col-sm-4 item item-blog-grid-3-no-sb post">
                <div class="item-inner mv-box-shadow-gray-1">
                  <div class="item-inner-relative">
                    <div class="block-15-thumb mv-effect-relative"><a href="{{route('single.album', $product->id)}}" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea"><span style="background-image: url({{asset('images/album/'.$product->image )}});" class="block-15-thumb-img"></span></a><span class="polygon hidden-xs hidden-sm"></span><span onclick="$(this).remove()" class="block-15-date mv-date-style-1 hidden-xs hidden-sm"><span class="day">29</span><span class="month">sep</span></span></div>
                    <!-- .block-15-thumb-->
                    <div class="block-15-main">
                      <div class="block-15-main-inner">
                        <div class="block-15-title"><a href="{{route('single.album', $product->id)}}" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-overflow-ellipsis">{{$product->title}}</a></div>
                        <ul class="block-15-meta mv-ul">
                          <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-pencil-square-o"></i></span>{{$product->created_at}}</span></a></li>
                        </ul>
                        <div class="block-15-content">{{$product->short_descp}}</div>
                        <div class="block-15-read-more"><a href="{{route('single.album', $product->id)}}" class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span class="btn-inner"><i class="btn-icon fa fa-long-arrow-right"></i><span class="btn-text">read more</span></span></a></div>
                      </div>
                    </div>
                    <!-- .block-15-main-->
                  </div>
                </div>
              </article>
              <!-- .post-->
              @endforeach
            </div>
          </div>
          <!-- .mv-list-blog-wrapper-->
          <div class="mv-pagination-wrapper">
            <div class="mv-pagination-style-1 has-count-post">
              <div class="count-post mv-title-style-10"><span class="number">12</span> Album of <span class="number">5</span> Pages</div>
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
      <section class="mv-main-body about-us-main mv-bg-gray mv-wrap" style="padding: 0px 0;">
        <div class="about-us-inner">
          <div class="block-our-story">
            <div class="container">
              <div class="mv-block-style-34 mv-bg-white mv-box-shadow-gray-1">
                <div class="block-34-inner">
                  <div class="block-34-title">
                    <div class="text-main">our story</div>
                    <div class="text-sub">{{$brand->description}}</div>
                  </div>
                  <div  class="block-34-box">
                    <div class="block-34-box-inner">
                      <div class="mv-col-center">
                        <div class="block-34-content">{{$brand->long_descp}} <br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- .mv-block-style-34-->
            </div>
          </div>
          <!-- .block-our-story-->
      </section>

@endsection