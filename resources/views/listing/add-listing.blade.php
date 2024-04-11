@extends('layouts.app')
@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- contact area -->
    <div class="content-block">
        <!-- Browse Jobs -->
        <section class="content-inner bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 m-b30">
                        <div class="sticky-top">
                            <div class="shop-account">
                                <ul class="account-list">
                                    <li>
                                        <a href="{{route('my-listings')}}"><i class="fa fa-briefcase"
                                                aria-hidden="true"></i>
                                            <span>My Listings</span></a>
                                    </li>
                                  <!--   <li>
                                        <a href="help-desk"><i class="far fa-id-card" aria-hidden="true"></i>
                                            <span>Faq</span></a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 m-b30">
                        <div class="shop-bx shop-profile">
                            <div class="shop-bx-title clearfix">
                                <h5 class="text-uppercase">Add Listing</h5>
                            </div>
                            <form method="POST" action="{{route('list.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput7" class="form-label">Book Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="formcontrolinput7"
                                                name="book_title" value="{{ old('book_title') }}" required autofocus>
                                            @error('book_title')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput8" class="form-label">Book Subtitle
                                                (Optional)</label>
                                            <input type="text" class="form-control" id="formcontrolinput8"
                                                name="book_subtitle" value="{{ old('book_subtitle') }}">
                                            @error('auth')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput5" class="form-label">Book Author Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="formcontrolinput5"
                                                name="author_name" value="{{ old('author_name') }}" required>
                                            @error('author_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label for="formcontrolinput6" class="form-label">Book Category <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control" name="book_category" required>
                                                <option value="" selected disabled> --Select Category--</option>
                                                @foreach ($category as $cat)
                                                <option value="{{$cat->book_category}}">{{$cat->book_category}}</option>
                                                @endforeach
                                            </select>
                                            @error('book_category')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="formcontrolinput9" class="form-label">Book Image <span
                                                    class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="book_image" id="image-input"
                                                required>
                                            @if ($errors->has('book_image'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('book_image') }}</strong>
                                            </span>
                                            @endif
                                            <img id="preview-image" src="#" alt="Preview Image"
                                                style="display: none; width: 100px; height: 100px;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="formcontrolinput10" class="form-label">Book Original Price
                                                (Optional)</label>
                                            <input type="text" class="form-control" name="book_original_price"
                                                id="formcontrolinput10" value="{{ old('book_original_price') }}">
                                            @error('book_original_price')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-4">
                                            <label for="formcontrolinput10" class="form-label">Book Selling Price <span
                                                    class="text-danger">*</span></label>

                                            <input type="text" class="form-control" name="book_selling_price"
                                                id="formcontrolinput10" value="{{ old('book_selling_price') }}"
                                                required>
                                            @error('book_selling_price')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label for="formcontrolinput9" class="form-label">Description <span
                                                    class="text-danger">*</span></label>
                                            <textarea class="form-control" name="book_description" id=""
                                                required>{{ old('book_description') }}</textarea>
                                            @error('book_description')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btnhover">SELL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Browse Jobs END -->
    </div>
</div>
<!-- Content END-->
<hr>

@section('scripts')
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
@endsection

@endsection