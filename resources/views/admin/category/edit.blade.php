@extends('admin.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit Category</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
          <li class="breadcrumb-item active">edit-category</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
	<div class="container-fluid">
		<div class="card">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Category Title *</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ $category->title }}" required>
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
                          <option value="0">Please Select a Brand</option>
                          @foreach($categories as $p_category)
                          <option value="{{ $p_category->id }}" {{ $category->parent_id == $p_category->id ? 'selected' : '' }}>{{ $p_category->title }}</option>
                          @endforeach
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
                        <label>Category Position *</label>
                        <input type="text" name="position" value="{{ $category->position }}" class="form-control @error('position') is-invalid @enderror" placeholder="Position" required>
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
                        <img src="{{ asset('images/category/'.$category->image ) }}" width="100">
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
                        <img src="{{ asset('images/category/'.$category->banner ) }}" width="100">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Video </label>
                        <input type="file" name="video" class="form-control @error('video') is-invalid @enderror" placeholder="Image">
                        <video width="320" height="240" controls>
                            <source src="{{asset($category->video)}}" type="video/mp4">
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
                            <source src="{{ asset($category->audio) }}" type="audio/mpeg">
                            Your browser does not support the audio tag.
                          </audio>
                          @error('audio')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label><input type="checkbox" name="is_featured" class="@error('is_featured') is-invalid @enderror" value="{{ $category->is_featured }}" {{ $category->is_featured == 1 ? 'checked' : '' }}> Publish Products in Homepage by this Category</label> 
                        @error('is_featured')
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

@section('scripts')
	<script>
  
</script>
@endsection