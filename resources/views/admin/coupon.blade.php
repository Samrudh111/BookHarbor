@extends('admin-layouts.admin-app')
@section('admin-content')

 <!-- Content wrapper -->
 <div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    
  <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Dashboard /</span> Coupons
</h4>

@include('base.alerts')
<!-- Users List Table -->
<div class="card">
<div class="card mb-4">
      <div class="card-header header-elements">
          <div class="btn-group">
                  <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            <span class="fas fa-plus"></span> Add Coupon
            </button>
          </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Coupon Code</th>
          <th>Minimum Amount</th>
          <th>Discount Price</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($coupons as $coupon)
        <tr>
          <td>{{$coupon->id}}</td>
          <td>{{$coupon->code}}</td>
          <td>
            {{$coupon->minimum_amount}}
          </td>
          <td>{{$coupon->discount_price}}</td>
          <td>
            <a href="{{route('coupon.destroy',$coupon->id)}}" class="btn btn-danger">
            <i class="fas fa-trash"></i>
            </a>

            <!-- Edit button with pencil icon -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUpdate_{{$coupon->id}}">
            <i class="fas fa-pencil-alt"></i>
            </button>
          </td>
        </tr>
        <!-- Modal -->
        <form action="{{route('coupon.update',$coupon->id)}}" method="POST">
            @method('PUT')
            @csrf
          <div class="modal fade" id="modalUpdate_{{$coupon->id}}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Update Coupon</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">Coupon Code</label>
                      <input type="text" id="nameWithTitle" name="code" class="form-control" value="{{$coupon->code}}" required>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Minimum Amount</label>
                      <input type="tel" id="emailWithTitle" name="minimum_amount" class="form-control" value="{{$coupon->minimum_amount}}" required>
                    </div>
                    <div class="col mb-0">
                      <label for="dobWithTitle" class="form-label">Discount Price</label>
                      <input type="tel" id="dobWithTitle" name="discount_price" class="form-control" value="{{$coupon->discount_price}}" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>
          </form>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>


    
  </div>
  <!-- / Content -->

          <!-- Modal -->
          <form action="{{route('coupon.add')}}" method="POST">
            @csrf
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Add Coupon</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-3">
                      <label for="nameWithTitle" class="form-label">Coupon Code</label>
                      <input type="text" id="nameWithTitle" name="code" class="form-control" placeholder="Enter Coupon Code" required>
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-0">
                      <label for="emailWithTitle" class="form-label">Minimum Amount</label>
                      <input type="tel" id="emailWithTitle" name="minimum_amount" class="form-control" placeholder="Minimum Amount" required>
                    </div>
                    <div class="col mb-0">
                      <label for="dobWithTitle" class="form-label">Discount Price</label>
                      <input type="tel" id="dobWithTitle" name="discount_price" class="form-control" placeholder="Discount Price" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>
          </form>
@endsection