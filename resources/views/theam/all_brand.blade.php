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
      <section class="home-3-featured-products mv-wrap" style="background:#1c0202;">
  <div class="container-fluid">
    <div class="container">
      <div class="featured-title mv-title-style-2 title-home-3">
        <div class="title-2-inner">
          <img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="Featured Products Icon" class="icon image-live-view" />
          <span class="main">Featured Bands</span>
          <span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span>
        </div>
      </div>
      <!-- .featured-title-->

      <div class="featured-main mv-filter-style-2">
        <div class="filter-button mv-btn-group">
          <div class="group-inner">
            <button data-filter="*" class="mv-btn mv-btn-style-8 active">All</button>
            <button data-filter=".FOCK" class="mv-btn mv-btn-style-8">FOCK</button>
            <button data-filter=".ROCK" class="mv-btn mv-btn-style-8">ROCK</button>
            <button data-filter=".RB" class="mv-btn mv-btn-style-8">R&B</button>
            <button data-filter=".JAZZ" class="mv-btn mv-btn-style-8">JAZZ</button>
            <button data-filter=".RAB" class="mv-btn mv-btn-style-8">RAB</button>
          </div>
        </div>
        <!-- .filter-button-->

        <div class="row filter-list-wrapper">
          <div class="filter-list mv-block-style-2">
            <div class="block-2-list">
              @foreach ($brands as $item)
          
                <article class="col-xs-6 col-sm-4 col-md-4 item item-filter-home-3 filter-item post {{ $item->brand_type }}">
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

@endsection