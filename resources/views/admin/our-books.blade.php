@extends('admin-layouts.admin-app')
@section('admin-content')

<!-- Content wrapper -->
<div class="content-wrapper">

<!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Books /</span> Our Books
</h4>
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<!-- Basic Bootstrap Table -->
<div class="card">
<div class="card mb-4">
      <div class="card-header header-elements">
          <div class="btn-group">
          <a href="{{route('admin.add-books')}}" class="btn btn-primary"><span class="tf-icons bx bx-plus me-1"></span> Add New Books</a>
          </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Book Image</th>
          <th>Book Title</th>
          <th>Author Name</th>
          <th>Publisher Name</th>
          <th>Published Year</th>
          <th>Original Price</th>
          <th>Selling Price</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($ourbooks as $books)
        <tr>
        <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-md pull-up" title="{{$books->book_title}}">
                <img src="/storage/book_images/{{$books->book_image}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><strong>{{$books->book_title}}</strong></td>
          <td>{{$books->author_name}}</td>
          <td>{{$books->publisher_name}}</td>
          <td>{{$books->published_date}}</td>
          <td><del>{{$books->book_original_price}}</del></td>
          <td>{{$books->book_selling_price}}</td>
          <td>@if($books->status == 'In Stock')
            <button class="badge bg-success py-1 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1 dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">{{$books->status}}</button>
            @elseif($books->status == 'Sold Out')
            <button class="badge bg-danger py-1 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1 dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">{{$books->status}}</button>
            @endif
              <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                @if($books->status == 'In Stock')
                  <li><a class="dropdown-item" href="{{route('sold.update', ['id' => $books->id])}}">Sold Out</a></li>
                @elseif($books->status == 'Sold Out')
                <li><a class="dropdown-item" href="{{route('stock.update', ['id' => $books->id])}}">In Stock</a></li>
                @endif
              </ul>
          <td>
<div class="btn-group" role="group" aria-label="Basic outlined example">
<a href="" type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#largeModal_{{$books->id}}"><i class='bx bxs-edit text-success'></i></a>
    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproduct_{{ $books->id }}"><i class='bx bxs-trash text-danger'></i></button>

    <!-- Modal  Delete Folder/ File-->
        <form id="deleteProductForm" action="{{route('products.destroy', ['product' => $books->id])}}" method="POST">
        <div class="modal fade" id="deleteproduct_{{ $books->id }}" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="deletecustomerLabel">Delete item Permanently?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body justify-content-center flex-column d-flex">
                    <i class="bx bxs-trash text-danger display-2 text-center mt-2"></i>
                    <p class="mt-4 fs-5 text-center">The data will get deleted Permanently</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger color-fff" id="deleteCustomerButton">Delete</button>
                </div>
            </div>
            </div>
        </div>
   </form>

           <!-- Edit Modal -->
           <form id="deleteProductForm" action="{{route('adminbooks.update',$books->id)}}" method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="largeModal_{{$books->id}}" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            @method('PUT')
                @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Edit Book Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="emailLarge" class="form-label">Book Title <span class="text-danger">*</span></label>
                    <input type="text" name="book_title" class="form-control" value="{{$books->book_title}}" required>
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col mb-2">
                    <label for="dobLarge" class="form-label">Book Subtitle (Optional)</label>
                    <input type="text" name="book_subtitle" class="form-control" value="{{$books->book_subtitle}}">
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="emailLarge" class="form-label">Author Name <span class="text-danger">*</span></label>
                    <input type="text" name="author_name" class="form-control" value="{{$books->author_name}}" required>
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col mb-2">
                    <label for="dobLarge" class="form-label">Publisher Name <span class="text-danger">*</span></label>
                    <input type="text" name="publisher_name" class="form-control" value="{{$books->publisher_name}}">
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="row">
                <div class="col mb-2">
                      <label class="form-label" for="basic-default-fullname">Book Image <span class="text-danger">*</span></label>
                      <input type="file" class="form-control" name="book_image" id="image-input">
                      @error('book_image')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <img id="preview-image" src="#" alt="Preview Image"
                      style="display: none; width: 100px; height: 100px;">
                  </div>
                  <div class="col mb-2">
                      <label class="form-label" for="basic-default-fullname">Total Stock Available <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="total_books" value="{{$books->total_books}}" required>
                      @error('total_books')
                      <span class="text-danger" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                  </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="emailLarge" class="form-label">Published Year <span class="text-danger">*</span></label>
                    <input type="text" name="published_date" class="form-control" value="{{$books->published_date}}" required>
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col mb-2">
                    <label for="dobLarge" class="form-label">Category <span class="text-danger">*</span></label>
                    <select class="form-control" name="category_id" id="basic-default-fullname" required>
                            @foreach ($category as $cat)
                            <option value="{{$cat->id}}" selected>{{$cat->book_category}}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="nameLarge" class="form-label">Product Description <span class="text-danger">*</span></label>
                    <textarea name="product_description" class="form-control">{{$books->product_description}}</textarea>
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                <div class="row g-2">
                <div class="col mb-2">
                    <label for="emailLarge" class="form-label">Original Price <span class="text-danger">*</span></label>
                    <input type="text" name="book_original_price" id="emailLarge" class="form-control" value="{{$books->book_original_price}}" required>
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="col mb-2">
                    <label for="dobLarge" class="form-label">Selling Price <span class="text-danger">*</span></label>
                    <input type="text" name="book_selling_price" class="form-control" value="{{$books->book_selling_price}}">
                    @error('book_title')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
         </form>
       </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
    </div>
</div>

@endsection
@include('scripts.script')
