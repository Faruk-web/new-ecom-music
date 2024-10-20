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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
  /* General Reset */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Arial', sans-serif;
    background-color: #f1f1f1;
    padding:0px;
  }

  /* Custom Audio Player Styling */
  .custom-audio {
    max-width: 1180px;
    margin: 9px auto;
    background: linear-gradient(135deg, #bb3819, #67fff1);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap; 
  }

  /* Playlist Title */
  h2 {
    color: #fff;
  }

  /* Track List */
  .audio-playlist {
    margin-bottom: 100px; /* Adds space to the bottom for fixed player */
  }

  /* Fixed Music Cart */
  .fixed-player {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #282828;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
    box-shadow: 0px -2px 10px rgba(0, 0, 0, 0.5);
    z-index: 9999;
  }

  .fixed-player .play-pause-btn {
    background-color:#931c01;
    border: none;
    padding: 10px;
    border-radius: 50%;
    color: white;
    cursor: pointer;
  }

  .fixed-player .audio-info {
    flex-grow: 1;
    margin: 0 15px;
  }

  .fixed-player .audio-title {
    font-size: 18px;
    font-weight: bold;
  }

  .fixed-player .audio-artist {
    font-size: 14px;
    color: #b3b3b3;
  }

  .fixed-player img {
    width: 50px;
    height: 50px;
    border-radius: 5px;
  }

  .progress-bar {
    width: 100%;
    margin: 10px 0;
  }

  .progress-bar input {
    width: 100%;
    background:#71e1e1;
    height: 5px;
    border-radius: 4px;
    -webkit-appearance: none;
  }

  .progress-bar input::-webkit-slider-thumb {
    width: 15px;
    height: 15px;
    background-color:#F18D51;
    border-radius: 50%;
    cursor: pointer;
    -webkit-appearance: none;
  }
  .fixed-navbar {
    position: fixed; /* Fix the navbar at the top */
    top: 0;         /* Align to the top */
    left: 0;        /* Align to the left */
    width: 100%;    /* Full width */
    z-index: 2000;  /* Ensure it is above other elements */
    background: #fff; /* Navbar background color */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
    
}

/* Fixed Section initially hidden */
.fixed-section {
    display: none;  /* Hide section initially */
    position: fixed; /* Fix the section at the top */
    top: 94px;      /* Adjust based on navbar height */
    left: 0;        /* Align to the left */
    width: 100%;    /* Full width */
    z-index: 1000;  /* Below the navbar */
    background: #1c0202; /* Maintain the background color */
    padding: 10px 0; /* Adjust padding to make it smaller */
    height: 123px;    /* Set the height of the cart section */
    overflow: hidden; /* Prevent overflow if content exceeds height */
}

.item-inner {
    padding: 5px; /* Reduce padding for items if necessary */
}
.caroufredsel_wrapper {
    width: 100% !important;
    height: auto !important;
    display: block !important;
}

.mv-slider-wrapper {
    width: 100% !important;
    height: auto !important;
    display: block !important;
    overflow: visible !important;
    position: none!important;
}

.mv-slider-wrapper {
    position: relative !important;
}
.caroufredsel_wrapper {
    position: relative !important;
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
                <span class="main">Music video</span>
              </div>
            </div>
            <!-- .featured-title-->
            <div class="featured-main mv-filter-style-2">
              <!-- .filter-button-->
              <div class="row filter-list-wrapper">
                <div class="filter-list mv-block-style-2">
                  <div class="block-2-list">
                      @foreach ($musics as $music)
                        <article class="col-xs-6 col-sm-4 col-md-3 item item-filter-home-3 filter-item post }}">
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
                              <strong>{{ $loop->index + 1 }} ) {{ $music->video_name }} - {{ $music->brand->title }}</strong>
                                <div class="content-price"><span class="new-price">{{$music->video_name}}</span></div>
                              </div>
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

     <section class="mv-main-body blog-3-no-sb-main mv-bg-gray mv-wrap">
        <div class="container">
        <div class="featured-title mv-title-style-2 title-home-3">
            <div class="title-2-inner" style="margin-top: 44px;">
              <img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/>
              <span class="main">Featured Music</span>
            </div>
          </div>
          <div class="mv-list-blog-wrapper mv-block-style-15">
            <div class="row block-15-list mv-list-blog">
              <div class="audio-playlist">
                <h2> <b>PLAYLIST</b> </h2>
                @foreach($musics as $item)
                <div class="audio-player custom-audio" data-audio="{{ asset($item->audio) }}" data-title="{{ $item->audio_name }}" data-artist="{{ $item->artist_name }}" data-image="{{ asset('images/music/'.$item->image) }}">
                <a target="_blank" class="playlist-play-btn" style="width: 36px;font-size: 23px;background: #c31c1c;border: none;">
                  <i class="fas fa-play"></i>
                </a>
                <strong>{{ $loop->index + 1 }} ) {{ $item->audio_name }} - {{ $item->brand->title }}-{{ $item->category->title }}</strong>
                  <img style="height: 50px;" src="{{ asset('images/music/'.$item->image) }}" alt="album cover" />
                </div>
                @endforeach
              </div>
            </div>
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
<!-- Fixed Music Cart (always visible) -->
<div class="fixed-player">
<button class="fixed-play-btn" style="width: 36px;font-size: 23px;background: #c31c1c;border: none;"><i class="fas fa-play"></i></button>
  <img id="fixed-player-image" src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="album cover" />
  <div class="audio-info">
    <div class="audio-title" id="fixed-player-title">Select a track</div>
    <div class="audio-artist" id="fixed-player-artist"></div>
  </div>
  <div class="progress-bar">
    <input type="range" id="fixed-player-progress" value="0" step="1" min="0" max="100">
  </div>
  <audio id="fixed-player-audio" preload="auto">
    <source id="fixed-player-source" src="" type="audio/mpeg">
  </audio>
</div>







      <script>
          let currentAudio = document.getElementById('fixed-player-audio');
          let fixedPlayPauseBtn = document.querySelector('.fixed-play-btn');
          let progressBar = document.getElementById('fixed-player-progress');
          let fixedPlayerTitle = document.getElementById('fixed-player-title');
          let fixedPlayerArtist = document.getElementById('fixed-player-artist');
          let fixedPlayerImage = document.getElementById('fixed-player-image');
          let fixedSection = document.querySelector('.fixed-section'); // Select the fixed section


          // Function to show the fixed section
          function showFixedSection() {
              fixedSection.style.display = 'block';
          }

          // Function to hide the fixed section
          function hideFixedSection() {
              fixedSection.style.display = 'none';
          }

          // Play or pause the fixed audio player
          fixedPlayPauseBtn.addEventListener('click', function() {
              if (currentAudio.paused) {
                  currentAudio.play();
                  fixedPlayPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                  showFixedSection(); // Show section when audio plays
              } else {
                  currentAudio.pause();
                  fixedPlayPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
                  hideFixedSection(); // Hide section when audio pauses
              }
          });


          // Update fixed player when a track is clicked in the playlist
          document.querySelectorAll('.audio-player').forEach(player => {
              player.addEventListener('click', function() {
                  let audioSrc = this.getAttribute('data-audio');
                  let title = this.getAttribute('data-title');
                  let artist = this.getAttribute('data-artist');
                  let imageSrc = this.getAttribute('data-image');

                  // Update fixed player details
                  fixedPlayerTitle.textContent = title;
                  fixedPlayerArtist.textContent = artist;
                  fixedPlayerImage.src = imageSrc;
                  currentAudio.src = audioSrc;

                  // Auto-play the new track
                  currentAudio.play();
                  fixedPlayPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
                  showFixedSection(); // Show section when a new track plays
              });
          });

          // Update progress bar as the audio plays
          currentAudio.addEventListener('timeupdate', function() {
              let progress = (currentAudio.currentTime / currentAudio.duration) * 100;
              progressBar.value = progress;
          });

          // Hide the section when the audio ends
          currentAudio.addEventListener('ended', function() {
              hideFixedSection(); // Hide section when audio ends
              fixedPlayPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
          });

          window.addEventListener('load', function () {
              const sliderWrapper = document.querySelector('.mv-slider-wrapper');
              if (sliderWrapper) {
                  sliderWrapper.style.position = 'relative';
              }
          });

      </script>
@endsection