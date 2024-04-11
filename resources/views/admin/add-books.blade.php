@extends('admin-layouts.admin-app')
@section('admin-content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Our Books/</span> Add Books</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                    <form method="POST" action="{{route('adminbook.store')}}" enctype="multipart/form-data">
                        @csrf
                            <h5>1. Book Details</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Book Title <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="basic-default-fullname"
                                            name="book_title" value="{{ old('book_title') }}" required autofocus>
                                            @error('book_title')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Book Subtitle
                                            (Optional)</label>
                                        <input type="text" class="form-control" id="basic-default-fullname"
                                            name="book_subtitle" value="{{ old('book_subtitle') }}"/>
                                            @error('book_subtitle')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Book Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control text-capitalize" name="book_image" id="image-input" required>
                                        @error('book_image')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <img id="preview-image" src="#" alt="Preview Image"
                                        style="display: none; width: 100px; height: 100px;">
                                    </div>
                                </div>
                                <div class="col">
                                <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Total Stock Available <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control text-capitalize" name="total_books" required>
                                        @error('total_books')
                                        <span class="text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Author Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control text-capitalize" id="basic-default-fullname"
                                            name="author_name" value="{{ old('author_name') }}" required/>
                                            @error('author_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Publisher Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="basic-default-fullname"
                                            name="publisher_name" value="{{ old('publisher_name') }}" required/>
                                            @error('publisher_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Book
                                            Published Year <span class="text-danger">*</span></label>
                                        <input type="tel" class="form-control" id="basic-default-fullname"
                                            name="published_date" min="1900" max="2023" minlength="4" maxlength="4" value="{{ old('published_date') }}" required/>
                                            @error('published_date')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="category_id" id="basic-default-fullname" required>
                                        <option value="" selected disabled>--Select Category--</option>
                                            @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->book_category}}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="password"></label>
                                            <!-- Button trigger modal -->
                                            <a href="" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                                <small>+ Add New Category</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Book Description (Optional)</label>
                                <textarea class="form-control" id="basic-default-fullname" name="book_description"></textarea>
                                @error('book_description')
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <hr class="my-4 mx-n4" />
                            <h5>2. Price Details</h5>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Original Price (Optional)</label>
                                        <input type="number" maxlength="4" class="form-control" id="basic-default-fullname"
                                            name="book_original_price" value="{{ old('book_original_price') }}"/>
                                            @error('book_original_price')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-default-fullname">Selling Price <span class="text-danger">*</span></label>
                                        <input type="number" maxlength="4" class="form-control" id="basic-default-fullname"
                                            name="book_selling_price" value="{{ old('book_selling_price') }}" required/>
                                            @error('book_selling_price')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->

        <!-- Modal -->
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="POST" action="{{route('admin.category')}}">
                        @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label"> Category Name</label>
                                <input type="text" id="myInput" oninput="capitalizeFirstLetter()" class="form-control"
                                    name="book_category" value="{{ old('book_category') }}" required/>
                                            @error('book_category')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
  <script>
// Get the file input element
var imageInput = document.getElementById('image-input');

// Add an event listener to the file input
imageInput.addEventListener('change', function(event) {
    // Get the selected file
    var selectedFile = event.target.files[0];

    // Create a FileReader object
    var reader = new FileReader();

    // Set up the FileReader onload event
    reader.onload = function() {
        // Get the data URL of the loaded image
        var imageDataURL = reader.result;

        // Set the source of the image element to the data URL
        var previewImage = document.getElementById('preview-image');
        previewImage.src = imageDataURL;

        // Display the image
        previewImage.style.display = 'block';
    };

    // Read the selected file as a data URL
    reader.readAsDataURL(selectedFile);
});
</script>

<script>
    function capitalizeFirstLetter() {
  var input = document.getElementById("myInput");
  var inputValue = input.value;
  var capitalizedValue = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
  input.value = capitalizedValue;
}

</script>
@endpush
