@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Create Album</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">create-Album</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
	<div class="container-fluid">
		<div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                        <label>Brand</label>
                        <select name="brand_id" id="brand" class="form-control @error('brand_id') is-invalid @enderror">
                          <option value="0">Please Select a Brand</option>
                          @foreach($brands as $brand)
                          <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                          @endforeach
                        </select>
                        @error('brand_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" id="category" class="form-control @error('category_id') is-invalid @enderror">
                          <option value="0">Please Select a Category</option>
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Album Name</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Thumbnail *</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image" required>
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Banner</label>
                        <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror" placeholder="banner">
                        @error('banner')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div id="video-wrapper">
                            <label style="color:blue">Upload Video (required) or Enter Video Link (optional)</label>
                            <div class="video-entry">
                                <input type="file" name="video[]" accept="video/*"> <!-- Video file -->
                                <input type="url" name="video_link[]" placeholder="Enter Video Link (optional)"> <!-- Video link -->
                            </div>
                        </div>
                        <button type="button" class="btn btn-info" id="add-more-videos">Add More Video (File or Link)</button>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <div id="audio-wrapper">
                            <label style="color:blue">Upload Audio (required) or Enter Audio Link (optional)</label>
                            <div class="audio-entry">
                                <input type="file" name="audio[]" accept="audio/*"> <!-- Audio file -->
                                <input type="url" name="audio_link[]" placeholder="Enter Audio Link (optional)"> <!-- Audio link -->
                            </div>
                        </div>
                        <button type="button" class="btn btn-info" id="add-more-audios">Add More Audio (File or Link)</button>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
	</div>
</section>


<script>
  document.getElementById('brand').addEventListener('change', function() {
    var brandId = this.value;
    if (brandId != 0) {
      // Make an AJAX request to fetch categories for the selected brand
      fetch('/home/categories/' + brandId)
        .then(response => {
          console.log("Fetch response: ", response); // Debugging: Log the response

          if (!response.ok) {
            throw new Error("Network response was not ok"); // Handle any response errors
          }

          return response.json();
        })
        .then(data => {
          console.log("Categories fetched: ", data); // Debugging: Log the fetched categories
          var categorySelect = document.getElementById('category');
          categorySelect.innerHTML = '<option value="0">Please Select a Category</option>';

          // Add the fetched categories to the dropdown
          data.forEach(function(category) {
            var option = document.createElement('option');
            option.value = category.id;
            option.text = category.title;
            categorySelect.appendChild(option);
          });
        })
        .catch(error => console.error('Error fetching categories:', error)); // Catch and log any errors
    } else {
      // Clear the category dropdown if no brand is selected
      document.getElementById('category').innerHTML = '<option value="0">Please Select a Category</option>';
    }
  });
</script>

<script>
    // Add more video inputs (file or link)
    document.getElementById('add-more-videos').addEventListener('click', function () {
        var videoWrapper = document.getElementById('video-wrapper');
        var newVideoEntry = document.createElement('div');
        newVideoEntry.classList.add('video-entry');

        // Create file input for video
        var newVideoInput = document.createElement('input');
        newVideoInput.setAttribute('type', 'file');
        newVideoInput.setAttribute('name', 'video[]');
        newVideoInput.setAttribute('accept', 'video/*');

        // Create URL input for video link
        var newVideoLinkInput = document.createElement('input');
        newVideoLinkInput.setAttribute('type', 'url');
        newVideoLinkInput.setAttribute('name', 'video_link[]');
        newVideoLinkInput.setAttribute('placeholder', 'Enter Video Link');

        // Append both inputs to the new video entry
        newVideoEntry.appendChild(newVideoInput);
        newVideoEntry.appendChild(newVideoLinkInput);

        // Append the video entry to the video wrapper
        videoWrapper.appendChild(newVideoEntry);
    });

    // Add more audio inputs (file or link)
    document.getElementById('add-more-audios').addEventListener('click', function () {
        var audioWrapper = document.getElementById('audio-wrapper');
        var newAudioEntry = document.createElement('div');
        newAudioEntry.classList.add('audio-entry');

        // Create file input for audio
        var newAudioInput = document.createElement('input');
        newAudioInput.setAttribute('type', 'file');
        newAudioInput.setAttribute('name', 'audio[]');
        newAudioInput.setAttribute('accept', 'audio/*');

        // Create URL input for audio link
        var newAudioLinkInput = document.createElement('input');
        newAudioLinkInput.setAttribute('type', 'url');
        newAudioLinkInput.setAttribute('name', 'audio_link[]');
        newAudioLinkInput.setAttribute('placeholder', 'Enter Audio Link');

        // Append both inputs to the new audio entry
        newAudioEntry.appendChild(newAudioInput);
        newAudioEntry.appendChild(newAudioLinkInput);

        // Append the audio entry to the audio wrapper
        audioWrapper.appendChild(newAudioEntry);
    });
</script>
@endsection
