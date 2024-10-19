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
<section class="home-3-new-trending-item mv-wrap fixed-section" style="display: none;">
  <div class="container-fluid" style="background:#1c0202;">
    <!-- .new-trending-item-title-->
    <div class="new-trending-item-main">
      <div id="home-3-new-trending-item-slider" class="mv-scrollbar-slider-style-1">
        <div class="row mv-block-style-2" id="home-3-logo-brand-slider">
        <div class="block-17-slider-inner">
            <div class="row">
              <ul class="mv-slider-wrapper" style="position: none!important;">
              @foreach($products as $product)
                <li class="mv-slider-item col-xs-6 col-sm-4 col-md-2">
                  <div class="mv-dp-table align-middle slider-item-inner">
                    <div class="mv-dp-table-cell"><a  target="_blank"><img style="height: 100px;" src="{{asset($product->image)}}" alt="logo_brand"/></a></div>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <!-- .block-17-main-inner-->
            <button id="home-3-logo-brand-slider-prev" type="button" class="mv-slider-control-btn prev mv-btn mv-btn-style-3 responsive-btn-3-type-1 hidden-lg"><i class="btn-icon fa fa-angle-left"></i></button>
            <button id="home-3-logo-brand-slider-next" type="button" class="mv-slider-control-btn next mv-btn mv-btn-style-3 responsive-btn-3-type-1 hidden-lg"><i class="btn-icon fa fa-angle-right"></i></button>
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
