@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Event</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">edit-event</li>
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
                <form action="{{ route('event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Event Title *</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ $event->title }}" required>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Brand</label>
                        <select name="parent_id" class="select2 form-control @error('parent_id') is-invalid @enderror">
                          <option value="{{ $event->brand->id }}"> {{ $event->brand->title}}</option>
                        </select>
                        @error('parent_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Event Position *</label>
                        <input type="text" name="position" value="{{ $event->position }}" class="form-control @error('position') is-invalid @enderror" placeholder="Position">
                        @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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
                        <img src="{{ asset('images/event/'.$event->image ) }}" width="100">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Banner</label>
                        <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror" placeholder="banner">
                        @error('banner')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <img src="{{ asset('images/event/'.$event->banner ) }}" width="100">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Video Name</label>
                        <input type="text" name="video_name" value="{{ $event->video_name }}" class="form-control @error('video') is-invalid @enderror" placeholder="video_name">
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
                        <input type="text" name="audio_name" value="{{ $event->audio_name }}" class="form-control @error('video') is-invalid @enderror" placeholder="audio_name">
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
                        <video width="150" height="150" controls>
                            <source src="{{asset($event->video)}}" type="video/mp4">
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
                            <source src="{{ asset($event->audio) }}" type="audio/mpeg">
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
                          <input type="text" name="video_link" value="{{ $event->video_link }}" class="form-control @error('audio') is-invalid @enderror" placeholder="video_link">
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
                          <input type="text" name="audio_link" value="{{ $event->audio_link }}" class="form-control @error('audio') is-invalid @enderror" placeholder="audio_link">
                          @error('audio')
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
