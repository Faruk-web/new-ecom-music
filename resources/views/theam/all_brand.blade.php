@extends('frontand.master')
@section('content')
<section class="main-banner mv-wrap">
        <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
          <div class="page-name mv-caption-style-6">
            <div class="container">
              <div class="mv-title-style-9"><span class="main">All Brands 4 columns</span><img src="{{ asset('/') }}music_source/images/icon/icon_line_polygon_line.png" alt="icon" class="line"/></div>
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
              <li><a href="product-grid-3.html">Event</a></li>
              <li><a>All Brands 4 columns </a></li>
            </ul>
          </div>
        </div>
      </section>
      <!-- .main-breadcrumb-->
      <section class="home-2-news-accessories mv-wrap">
      <div class="container-fluid" style="background:#1c0202;">
        <div class="container" style="margin-top:100px">
          <div class="news-accessories-title mv-title-style-3">
            <div class="title-3-text"><span class="main" style="color:#fff">All Brands<span class="sub"></span></span></div>
            <div class="title-3-line"></div>
          </div>
          <!-- .news-accessories-title-->

          <div class="news-accessories-main">
            <div class="mv-block-style-9">
              <div class="row block-9-list">
              @foreach($brands as $item)
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
      <!-- .home-2-news-accessories-->

@endsection