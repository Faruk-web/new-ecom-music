@extends('frontand.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Audio Player</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
  /* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body Style */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f9f9f9;
  padding: 20px;
}

/* Custom Audio Player Styling */
.custom-audio {
  max-width: 600px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
}

/* Play/Pause Button */
.play-pause-btn {
  background-color: #1db954;
  border: none;
  color: white;
  padding: 15px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 24px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 15px;
}

.play-pause-btn:hover {
  background-color: #148e37;
}

.play-pause-btn i {
  color: white;
}

/* Audio Information Section */
.audio-info {
  flex-grow: 1;
}

/* Audio Title */
.audio-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
  color: #333;
}

/* Progress Bar */
.progress-bar {
  width: 100%;
  margin: 10px 0;
}

.progress-bar input {
  width: 100%;
  -webkit-appearance: none;
  background: #ddd;
  height: 8px;
  border-radius: 4px;
}

.progress-bar input::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 15px;
  height: 15px;
  background-color: #1db954;
  border-radius: 50%;
  cursor: pointer;
}

/* Audio Time */
.audio-time {
  font-size: 14px;
  color: #666;
  display: flex;
  justify-content: space-between;
}

  </style>
</head>
<body>
@foreach($allmusic as $item)
  <div class="audio-player custom-audio">
    <!-- Audio Element -->
    <audio class="audio-element" preload="auto">
      <source src="{{ asset($item->audio) }}" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>

    <!-- Custom Controls with Icon -->
    <div class="audio-controls">
      <button class="play-pause-btn"><i class="fas fa-play"></i></button>

      <!-- Audio Info and Progress Bar -->
      <div class="audio-info">
        <h3 class="audio-title">{{ $item->audio_name }}</h3> <!-- Dynamic Title -->
        <div class="progress-bar">
          <input type="range" class="progress-bar-range" value="0" step="1" min="0" max="100">
        </div>

        <!-- Current Time / Duration -->
        <div class="audio-time">
          <span class="current-time">0:00</span> / <span class="duration">0:00</span>
        </div>
      </div>
    </div>
  </div>
@endforeach





<script>
  // Query all audio players
  document.querySelectorAll('.audio-player').forEach(player => {
    const audio = player.querySelector('.audio-element');
    const playPauseBtn = player.querySelector('.play-pause-btn');
    const progressBar = player.querySelector('.progress-bar-range');
    const currentTimeDisplay = player.querySelector('.current-time');
    const durationDisplay = player.querySelector('.duration');

    // Format time in mm:ss
    function formatTime(seconds) {
      const minutes = Math.floor(seconds / 60);
      const secs = Math.floor(seconds % 60);
      return `${minutes}:${secs < 10 ? '0' : ''}${secs}`;
    }

    // Play/Pause functionality
    playPauseBtn.addEventListener('click', function() {
      if (audio.paused) {
        audio.play();
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
      } else {
        audio.pause();
        playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
      }
    });

    // Update progress bar and time display
    audio.addEventListener('timeupdate', function() {
      const progress = (audio.currentTime / audio.duration) * 100;
      progressBar.value = progress;

      currentTimeDisplay.textContent = formatTime(audio.currentTime);
      if (!isNaN(audio.duration)) {
        durationDisplay.textContent = formatTime(audio.duration);
      }
    });

    // Seek through the audio
    progressBar.addEventListener('input', function() {
      const seekTime = (progressBar.value / 100) * audio.duration;
      audio.currentTime = seekTime;
    });

    // Load metadata to display duration before playback
    audio.addEventListener('loadedmetadata', function() {
      durationDisplay.textContent = formatTime(audio.duration);
    });
  });
</script>



</body>
</html>



@endsection