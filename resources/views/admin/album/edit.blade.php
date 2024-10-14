@extends('admin.layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <!-- Album Edit Form -->
                <div class="card">
                <form action="{{ route('album.update', $album->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT for updating -->
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                          <label>Brand</label>
                          <select name="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                              <option value="">Select Brand</option>
                              @foreach($brands as $brand)
                                  <option value="{{ $brand->id }}" {{ $album->brand_id == $brand->id ? 'selected' : '' }}>
                                      {{ $brand->title }}
                                  </option>
                              @endforeach
                          </select>
                          @error('brand_id')
                              <span class="invalid-feedback">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                          <label>Category</label>
                          <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                              <option value="">Select Category</option>
                              @foreach($categories as $category)
                                  <option value="{{ $category->id }}" {{ $album->category_id == $category->id ? 'selected' : '' }}>
                                      {{ $category->title }}
                                  </option>
                              @endforeach
                          </select>
                          @error('category_id')
                              <span class="invalid-feedback">{{ $message }}</span>
                          @enderror
                      </div>
                      </div>
                      <div class="col-md-4">
                    <div class="form-group">
                        <label>Album Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $album->title }}" required>
                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                        @if($album->image)
                            <img src="{{ asset('images/album/' . $album->image) }}" alt="Album Image" width="100">
                        @endif
                    </div>
                    </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Banner</label>
                                    <input type="file" name="banner" class="form-control @error('banner') is-invalid @enderror">
                                    @error('banner')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                    @if($album->banner)
                                        <img src="{{ asset('images/album/' . $album->banner) }}" alt="Album Banner" width="100">
                                    @endif
                                </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Short Description </label>
                            <textarea id="short_descp" name="short_descp" class="form-control @error('short_descp') is-invalid @enderror" placeholder="Description">{!! $album->short_descp !!}</textarea>
                            @error('long_descp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label>Description *</label>
                            <textarea id="long_descp" name="long_descp" class="form-control @error('long_descp') is-invalid @enderror" placeholder="Description">{!! $album->long_descp !!}</textarea>
                            @error('long_descp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Album</button>
                </form>
                </div>
                <div class="card">
                <!-- Media Upload Form -->
                <form action="{{ route('album.uploadMedia', $album->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    @method('PUT') <!-- Use PUT for updating -->
                    <div class="row mt-5">
                    <div class="col-md-6">
                    <h4>Current Videos</h4>
                    <div id="video-wrapper">
                        @foreach($media as $entry)
                            @if($entry->video_file || $entry->video_link)
                                <div class="video-entry">
                                    @if($entry->video_file)
                                        <p>Current Video:
                                            <video width="100" controls>
                                                <source src="{{ asset($entry->video_file) }}" type="video/mp4">
                                            </video>
                                        </p>
                                    @endif
                                    @if($entry->video_link)
                                        <p>Video Link: 
                                            <a href="{{ $entry->video_link }}" target="_blank">{{ $entry->video_link }}</a>
                                        </p>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                        <input type="file" name="video[]" accept="video/*" placeholder="Upload new video">
                        <input type="url" name="video_link[]" placeholder="Enter new Video Link">
                    </div>
                    <button type="button" class="btn btn-info" id="add-more-videos">Add More Video (File or Link)</button>
                    </div>
                    <div class="col-md-6">
                    <h4>Current Audios</h4>
                    <div id="audio-wrapper">
                        @foreach($media as $entry)
                            @if($entry->audio_file || $entry->audio_link)
                                <div class="audio-entry">
                                    @if($entry->audio_file)
                                        <p>Current Audio:
                                            <audio controls>
                                                <source src="{{ asset($entry->audio_file) }}" type="audio/mp3">
                                            </audio>
                                        </p>
                                    @endif
                                    @if($entry->audio_link)
                                        <p>Audio Link: 
                                            <a href="{{ $entry->audio_link }}" target="_blank">{{ $entry->audio_link }}</a>
                                        </p>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                        <input type="file" name="audio[]" accept="audio/*" placeholder="Upload new audio">
                        <input type="url" name="audio_link[]" placeholder="Enter new Audio Link">
                    </div>
                    <button type="button" class="btn btn-info" id="add-more-audios">Add More Audio (File or Link)</button>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Update Media</button>
                </form>
            </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</section>
<script src="https://cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('long_descp', {
        filebrowserUploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token() ]) }}",
        filebrowserUploadMethod: 'form',
        extraPlugins: 'font,colorbutton',
        toolbar: [
            { name: 'document', items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt'] },
            { name: 'forms', items: ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language'] },
            { name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format', 'Font', 'FontSize'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize', 'ShowBlocks'] }
        ],
        font_names: 'Arial/Arial, Helvetica, sans-serif;' +
                    'Comic Sans MS/Comic Sans MS, cursive;' +
                    'Courier New/Courier New, Courier, monospace;' +
                    'Georgia/Georgia, serif;' +
                    'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;' +
                    'Tahoma/Tahoma, Geneva, sans-serif;' +
                    'Times New Roman/Times New Roman, Times, serif;' +
                    'Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;' +
                    'Verdana/Verdana, Geneva, sans-serif;' +
                    'Custom Font/Custom Font, sans-serif;',
        fontSize_sizes: '8/8px;9/9px;10/10px;11/11px;12/12px;14/14px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;36/36px;48/48px;72/72px'
    });
    
</script>
<script>
    // Add more video inputs (file or link)
    document.getElementById('add-more-videos').addEventListener('click', function () {
        var videoWrapper = document.getElementById('video-wrapper');
        var newVideoEntry = document.createElement('div');
        
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
