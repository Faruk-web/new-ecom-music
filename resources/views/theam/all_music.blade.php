@extends('frontand.master')
@section('content')

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
  </style>
<section class="main-banner mv-wrap">
  <div data-image-src="{{ asset('/') }}music_source/theme/1.jpg" class="mv-banner-style-1 mv-bg-overlay-dark overlay-0-85 mv-parallax">
    <div class="page-name mv-caption-style-6">
      <div class="container">
        <div class="mv-title-style-9"><span class="main">Musics Video & Audio</span></div>
      </div>
    </div>
  </div>
</section>
<section class="main-breadcrumb mv-wrap">
  <div class="mv-breadcrumb-style-1">
    <div class="container">
      <ul class="breadcrumb-1-list">
        <li><a href="home.html"><i class="fa fa-home"></i></a></li>
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

<section class="home-3-featured-products mv-wrap" style="margin-bottom: 0px!important;margin-top:-30px">
        <div class="container-fluid" style="background:#1c0202;">
          <div class="container">
            <div class="featured-title mv-title-style-2 title-home-3">
              <div class="title-2-inner">
              <div class="title-2-inner" style="margin-top:35px"><img src="{{ asset('/') }}music_source/images/icon/icon_m_3.png" alt="icon" class="icon image-live-view"/><span class="main">All Music</span><span class="sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</span></div>
              </div>
            </div>
            <!-- .featured-title-->
            
            <div class="featured-main mv-filter-style-2">
              <!-- .filter-button-->
              <div class="row filter-list-wrapper">
                <div class="filter-list mv-block-style-2">
                  <div class="block-2-list">
                  @foreach($allmusic as $music)
                        <article class="col-xs-6 col-sm-4 col-md-4 item item-filter-home-3 filter-item post">
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
                              <strong>{{ $loop->index + 1 }} ) {{ $music->video_name }} - {{ $music->brand->title }}-{{ $music->category->title }}</strong>
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
<!-- Loop through all the music items -->
<section class="mv-main-body blog-3-no-sb-main mv-bg-gray mv-wrap">
  <div class="container">
    <div class="mv-list-blog-wrapper mv-block-style-15">
      <div class="row block-15-list mv-list-blog">
        <div class="audio-playlist">
          <h2> <b>PLAYLIST</b> </h2>
          @foreach($allmusic as $item)
          <div class="audio-player custom-audio" data-audio="{{ asset($item->audio) }}" data-title="{{ $item->audio_name }}" data-artist="{{ $item->artist_name }}" data-image="{{ asset('images/music/'.$item->image) }}">
          <button class="playlist-play-btn" style="width: 36px;font-size: 23px;background: #c31c1c;border: none;">
  <i class="fas fa-play"></i>
</button>
          <strong>{{ $loop->index + 1 }} ) {{ $item->audio_name }} - {{ $item->brand->title }}-{{ $item->category->title }}</strong>
            <img style="height: 50px;" src="{{ asset('images/music/'.$item->image) }}" alt="album cover" />
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
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

// Play or pause the fixed audio player
fixedPlayPauseBtn.addEventListener('click', function() {
  if (currentAudio.paused) {
    currentAudio.play();
    fixedPlayPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    currentAudio.pause();
    fixedPlayPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
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
  });
});

// Update progress bar as the audio plays
currentAudio.addEventListener('timeupdate', function() {
  let progress = (currentAudio.currentTime / currentAudio.duration) * 100;
  progressBar.value = progress;
});

// Seek through the audio using progress bar
progressBar.addEventListener('input', function() {
  let seekTime = (progressBar.value / 100) * currentAudio.duration;
  currentAudio.currentTime = seekTime;
});
document.querySelectorAll('.playlist-play-btn').forEach(btn => {
  btn.addEventListener('click', function() {
    // Pause any currently playing audio
    if (!currentAudio.paused) {
      currentAudio.pause();
      fixedPlayPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
    }

    // Update button to reflect playing state
    let isPlaying = this.querySelector('i').classList.contains('fa-pause');
    document.querySelectorAll('.playlist-play-btn i').forEach(icon => {
      icon.classList.remove('fa-pause');
      icon.classList.add('fa-play');
    });

    if (!isPlaying) {
      this.querySelector('i').classList.remove('fa-play');
      this.querySelector('i').classList.add('fa-pause');
    }
  });
});

</script>
</body>
</html>
@endsection
