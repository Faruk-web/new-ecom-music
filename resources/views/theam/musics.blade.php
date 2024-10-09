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
      <!-- .main-breadcrumb-->
      <section class="mv-main-body blog-3-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
          <div class="mv-list-blog-wrapper mv-block-style-15">
            <div class="row block-15-list mv-list-blog">
            @foreach($musics as $product)
              <article class="col-xs-6 col-sm-4 item item-blog-grid-3-no-sb post">
                <div class="item-inner mv-box-shadow-gray-1">
                  <div class="item-inner-relative">
                    <div class="block-15-thumb mv-effect-relative"><a href="{{route('event.details', $product->id)}}" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea"><span style="background-image: url({{ asset('images/music/'.$product->image ) }});" class="block-15-thumb-img"></span></a><span class="polygon hidden-xs hidden-sm"></span><span onclick="$(this).remove()" class="block-15-date mv-date-style-1 hidden-xs hidden-sm"><span class="day">29</span><span class="month">sep</span></span></div>
                    <!-- .block-15-thumb-->
                    <div class="block-15-main">
                      <div class="block-15-main-inner">
                        <div class="block-15-title"><a href="{{route('event.details', $product->id)}}" title="Lamcorper suscipit lobortis nisl ut aliquip ex ea" class="mv-overflow-ellipsis">{{$product->audio_name}}</a></div>
                        <ul class="block-15-meta mv-ul">
                          <li class="meta-item mv-icon-left-style-3"><a href="#"><span class="text"> <span class="icon"><i class="fa fa-pencil-square-o"></i></span>{{$product->created_at}}</span></a></li>
                        </ul>
                        <div class="block-15-content">Lamcorper suscipit lobortis nisl ut aliquip ex ea</div>
                        <div class="block-15-read-more"><a href="{{route('event.details', $product->id)}}" class="mv-btn mv-btn-style-1 btn-1-h-40 btn-1-gray responsive-btn-1-type-5 btn-read-more"><span class="btn-inner"><i class="btn-icon fa fa-long-arrow-right"></i><span class="btn-text">read more</span></span></a></div>
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
          <!-- .mv-pagination-wrapper-->
        </div>
      </section>
      <section class="home-3-featured-products mv-wrap" style="background:#1c0202;">
        <div class="container-fluid">
          <div class="container">
            <div class="featured-title mv-title-style-2 title-home-3">
              <div class="title-2-inner">
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
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="music-item">
                        <audio controls width="480" height="240">
                                      <source src="{{ asset($music->audio) }}" type="audio/mpeg">
                                      Your browser does not support the audio tag.
                                    </audio>
                          <span class="price">${{ number_format($music->price, 2) }}</span>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                      <div class="title-2-inner">
                        <img style="height: 75px;" src="{{ asset('images/music/'.$product->image ) }}" alt="icon" class="icon image-live-view"/>
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
                    <div class="col-xs-4 col-sm-4 col-md-4">
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
                      <img style="height: 75px;" src="{{ asset('images/music/'.$product->image ) }}" alt="icon" class="icon image-live-view"/>
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