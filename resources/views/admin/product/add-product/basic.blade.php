<style>
    #single-image-preview{
        display: flex;
        flex-wrap: wrap;
    }
    #previews {
        display: flex;
        flex-wrap: wrap;
    }

    #single-image-preview img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin: 10px;
        border: 1px solid #ccc;
    }
    #previews img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        margin: 10px;
        border: 1px solid #ccc;
    }
</style>
@php
    $submission = \App\Models\Product::where('submission', 2)->first();
@endphp
@if( $submission == null)
    <form action="{{ route('product.store-1') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="card-header mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input group1" id="retail" type="checkbox" checked name="qpparels" value="1" value="1" style="height: 30px; width: 20px" >
                                            <label class="form-check-label" for="retail">Apparels</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <div class="form-check form-check-inline my-checkbox">
                                            <input class="form-check-input group1" id="noCrossCheck" type="checkbox" name="accessories" value="1" value="1" style="height: 30px; width: 20px" >
                                            <label class="form-check-label" for="noCrossCheck">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <div class="form-check form-check-inline my-checkbox">
                                            <input class="form-check-input group1" id="preOrderCheck" type="checkbox" name="limited_edition" value="1" value="1" style="height: 30px; width: 20px" >
                                            <label class="form-check-label" for="preOrderCheck">Limited Edition</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="productname">Product Name</label>
                        <input id="productname" name="title" type="text" class="form-control" placeholder="Product Name" @error('title') is-invalid @enderror  />
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
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

                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="code">Product Code</label>
                        <input id="code" name="code" readonly type="text" class="form-control" placeholder="Product Code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="datetime">Product Weight</label>
                        <input type="number" min="1" name="weight" class="form-control" placeholder="Product Weight"/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="gm" value="gm">
                            <label class="form-check-label" for="gm">gm</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="kg" value="kg">
                            <label class="form-check-label" for="kg">kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="ml" value="ml">
                            <label class="form-check-label" for="ml">ml</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="unit" id="litter" value="litter">
                            <label class="form-check-label" for="litter">litter</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Product Image </h3>
                            </div>
                            <div class="card-body">
                                <input class="file" type="file" name="image" id="file">
                                <img class="single-image" id="single-image-preview" src="#" alt="" height="80px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Product Gallery Image </h3>
                            </div>
                            <div class="card-body">
                                <input type="file" name="gallery[]" id="files" multiple>
                                <div id="previews"></div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
    </form>

@else
    <form action="{{ route('product.store-2') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="card-header mb-3">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-3">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <div class="form-check form-check-inline ">
                                            <input class="form-check-input group1" id="retail" type="checkbox" checked name="qpparels" value="1" value="1" style="height: 30px; width: 20px" >
                                            <label class="form-check-label" for="retail">Apparels</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <div class="form-check form-check-inline my-checkbox">
                                            <input class="form-check-input group1" id="noCrossCheck" type="checkbox" name="accessories" value="1" value="1" style="height: 30px; width: 20px" >
                                            <label class="form-check-label" for="noCrossCheck">Accessories</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="form-group col-md-9">
                                        <div class="form-check form-check-inline my-checkbox">
                                            <input class="form-check-input group1" id="preOrderCheck" type="checkbox" name="limited_edition" value="1" value="1" style="height: 30px; width: 20px" >
                                            <label class="form-check-label" for="preOrderCheck">Limited Edition</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label for="productname">Product Name</label>
                        <input id="productname" name="title" value="{{$product->title}}" type="text" class="form-control" placeholder="Product Name" @error('title') is-invalid @enderror  />
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                       <div class="form-group">
                        <label>Brand Name</label>
                        <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror">
                          <option value="{{ $product->brand->id }}">{{ $product->brand->title }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label>Category Name</label>
                        <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                          <option value="{{ $product->category->id }}">{{ $product->category->title }}</option>
                        </select>
                      </div>
                    </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="code">Product Code</label>
                        <input id="code" name="code" readonly value="{{$product->code}}" type="text" class="form-control" placeholder="Product Code">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="datetime">Product Weight</label>
                        <input type="number" min="1" name="weight" value="{{$product->weight}}" class="form-control" placeholder="Product Weight"/>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input group2" type="checkbox" name="unit" id="gm" value="gm" {{$product->unit == 'gm' ? 'checked' : ''}}>
                            <label class="form-check-label" for="gm">gm</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input group2" type="checkbox" name="unit" id="kg" value="kg" {{$product->unit == 'kg' ? 'checked' : ''}}>
                            <label class="form-check-label" for="kg">kg</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input group2" type="checkbox" name="unit" id="ml" value="ml" {{$product->unit == 'ml' ? 'checked' : ''}}>
                            <label class="form-check-label" for="ml">ml</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input group2" type="checkbox" name="unit" id="litter" value="litter" {{$product->unit == 'litter' ? 'checked' : ''}}>
                            <label class="form-check-label" for="litter">litter</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Product Image </h3>
                            </div>
                            <div class="card-body">
                                <input class="file" type="file" name="image" id="file">
                                @if($product->image)
                                    <img class="single-image" id="single-image-preview" src="{{asset($product->image)}}" alt="" height="80px">
                                @else
                                    <img class="single-image" id="single-image-preview" src="#" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Product Gallery Image </h3>
                            </div>
                            <div class="card-body">
                                <input type="file" name="gallery[]" id="files" multiple>
                                <div id="previews">
                                    @if($product->image)
                                        @foreach($product->product_image as $image)
                                            <img src="{{asset($image->image)}}" alt="" height="80px" width="80px">
                                        @endforeach
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right">Save</button>
    </form>

@endif

<!-- JavaScript code -->
<script>
    // Get the file input fields and preview containers
    const fileInput = document.querySelector('.file');
    const filesInput = document.querySelector('#files');
    const singleImagePreview = document.querySelector('#single-image-preview');
    const previewsContainer = document.querySelector('#previews');

    // Listen for changes to the file input field
    fileInput.addEventListener('change', () => {
        // Get the selected file
        const file = fileInput.files[0];

        // Create a file reader object
        const reader = new FileReader();

        // Set up a function to run when the file has been loaded
        reader.onload = () => {
            // Update the single image preview
            singleImagePreview.src = reader.result;
        };

        // Read the selected file as a data URL
        reader.readAsDataURL(file);
    });

    // Listen for changes to the multiple file input field
    filesInput.addEventListener('change', () => {
        // Clear the multiple preview container
        previewsContainer.innerHTML = '';

        // Loop through the selected files
        for (let i = 0; i < filesInput.files.length; i++) {
            // Get the selected file
            const file = filesInput.files[i];

            // Create a file reader object
            const reader = new FileReader();

            // Set up a function to run when the file has been loaded
            reader.onload = () => {
                // Create a new image element
                const image = document.createElement('img');
                image.src = reader.result;

                // Add the image to the multiple preview container
                previewsContainer.appendChild(image);
            };

            // Read the selected file as a data URL
            reader.readAsDataURL(file);
        }
    });
</script>
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
