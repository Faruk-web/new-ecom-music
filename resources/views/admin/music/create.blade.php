@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Create Music</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">create-category</li>
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
                <form action="{{ route('music.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label>Video Name</label>
                        <input type="text" name="video_name" class="form-control @error('video') is-invalid @enderror" placeholder="video_name">
                        @error('video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Audio Name</label>
                        <input type="text" name="audio_name" class="form-control @error('video') is-invalid @enderror" placeholder="audio_name">
                        @error('video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Video </label>
                        <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" placeholder="Image">
                        @error('video')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Audio </label>
                          <input type="file" name="audio" class="form-control @error('audio') is-invalid @enderror" placeholder="Audio">
                          @error('audio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Video Link</label>
                          <input type="text" name="video_link" class="form-control @error('audio') is-invalid @enderror" placeholder="video_link">
                          @error('audio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Audio Link</label>
                          <input type="text" name="audio_link" class="form-control @error('audio') is-invalid @enderror" placeholder="audio_link">
                          @error('audio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
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


@endsection
