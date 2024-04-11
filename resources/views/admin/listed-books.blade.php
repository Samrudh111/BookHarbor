@extends('admin-layouts.admin-app')
@section('admin-content')

<!-- Content wrapper -->
<div class="content-wrapper">

<!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Books /</span> Listed Books
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
          <h2>Listed Books</h2>
          </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Seller Name</th>
          <th>Book Image</th>
          <th>Book Name</th>
          <th>Author Name</th>
          <th>Description</th>
          <th>Original Price</th>
          <th>Selling Price</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($listed as $books)
        <tr>
          <td>{{$books->first_name}}</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-md pull-up" title="{{$books->book_title}}">
                <img src="/storage/book_images/{{$books->book_image}}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td>{{$books->book_title}}</td>
          <td>{{$books->author_name}}</td>
          <td>{{$books->book_description}}</td>
          <td><del>{{$books->book_original_price}}</del></td>
          <td>{{$books->book_selling_price}}</td>
          <td><span class="badge bg-label-primary me-1">{{$books->status}}</span></td>
          <td>
          <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteproduct_{{ $books->book_id }}"><i class='bx bxs-trash text-danger'></i></button>
    
    <!-- Modal  Delete Folder/ File-->
        <form id="deleteProductForm" action="{{route('products.destroylb', ['product' => $books->book_id])}}" method="POST">
        <div class="modal fade" id="deleteproduct_{{ $books->book_id }}" tabindex="-1"  aria-hidden="true">
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