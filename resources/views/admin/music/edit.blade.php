@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Music </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">edit-Music</li>
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
                <form action="{{ route('music.update', $music->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  <div class="col-md-4">
                       <div class="form-group">
                        <label>Brand Name</label>
                        <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                          <option value="{{ $music->brand->id }}">{{ $music->brand->title }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>Category Name</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                          <option value="{{ $music->category->id }}">{{ $music->category->title }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Thumbnail</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <img src="{{ asset('images/music/'.$music->image ) }}" width="100">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Video Name</label>
                        <input type="text" name="video_name" value="{{ $music->video_name }}" class="form-control @error('video_name') is-invalid @enderror" placeholder="video_name">
                        @error('video_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Audio Name</label>
                        <input type="text" name="audio_name" value="{{ $music->audio_name }}" class="form-control @error('audio_name') is-invalid @enderror" placeholder="audio_name">
                        @error('audio_name')
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
                        <video width="320" height="240" controls>
                            <source src="{{asset($music->video)}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
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
                          <audio controls>
                            <source src="{{ asset($music->audio) }}" type="audio/mpeg">
                            Your browser does not support the audio tag.
                          </audio>
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
                        <input type="text" name="video_link" value="{{ $music->video_link }}" class="form-control @error('video_link') is-invalid @enderror" placeholder="video_link">
                        @error('video_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Audio Link</label>
                        <input type="text" name="audio_link" value="{{ $music->audio_link }}" class="form-control @error('audio_link') is-invalid @enderror" placeholder="audio_link">
                        @error('audio_link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <button class="btn btn-primary">Save Changes</button>
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
@endsection
