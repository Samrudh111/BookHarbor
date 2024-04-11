@extends('admin-layouts.admin-app')
@section('admin-content')

<div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">

  <h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Order Details /</span> {{$orders->r_pay_id}}
</h4>

<div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table text-nowrap">
          <thead>
            <tr>
              <th>Product</th>
              <th>Payment</th>
              <th>Order Status</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
          @foreach ($orders->cart->cart_items as $cartItem)
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <img src="/storage/book_images/{{$cartItem->book->book_image}}" alt="Oneplus" height="32" width="32" class="me-2">
                  <div class="d-flex flex-column">
                    <span class="fw-semibold lh-1">{{$cartItem->book->book_title}}</span>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-muted lh-1">${{$orders->cart->amount_paid}}</div>
                <small class="text-muted">Fully Paid</small>
              </td>
              <td><span class="badge bg-label-primary">{{$orders->status}}</span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

@endsection
