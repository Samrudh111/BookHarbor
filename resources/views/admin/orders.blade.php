@extends('admin-layouts.admin-app')
@section('admin-content')

 <!-- Content wrapper -->
 <div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    
    
@include('base.alerts')
<div class="row g-4 mb-4">
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-start justify-content-between">
  <div class="content-left">
    <span>Total Orders</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">{{$totalOrders ?? 0}}</h4>
    </div>
  </div>
  <span class="badge bg-label-primary rounded p-2">
    <i class="bx bx-user bx-sm"></i>
  </span>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-start justify-content-between">
  <div class="content-left">
    <span>Delivered Orders</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">{{$deliveredOrders ?? 0}}</h4>
    </div>
  </div>
  <span class="badge bg-label-danger rounded p-2">
    <i class="bx bx-user-plus bx-sm"></i>
  </span>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-start justify-content-between">
  <div class="content-left">
    <span>Returned Orders</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">{{$returnedOrders ?? 0}}</h4>
    </div>
  </div>
  <span class="badge bg-label-success rounded p-2">
    <i class="bx bx-group bx-sm"></i>
  </span>
</div>
</div>
</div>
</div>
</div>
<!-- Users List Table -->
<div class="card">
<div class="card mb-4">
      <div class="card-header header-elements">
          <div class="btn-group">
          <h3>Orders List</h3>
          </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Amount</th>
          <th>Delivery Address</th>
          <th>City</th>
          <th>State</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($orders as $order)
        <tr>
          <td><a href="{{route('order.details',$order->r_pay_id)}}">{{$order->r_pay_id}}</a></td>
          <td><span class="badge bg-label-success me-1">Paid</span></td>
          <td>{{$order->user->address->address ?? ''}}</td>
          <td>{{$order->user->address->city ?? ''}}</td>
          <td>{{$order->user->address->state ?? ''}}</td>
          <td>
            <span class="badge bg-label-primary me-1">{{$order->status}}</span>
          </td>
          <td>
            @if ($order->status == 'Confirmed')
            <a class="btn btn-sm btn-success" href="{{route('order.packed',$order->id)}}"><span class="fas fa-check"></span>  Mark as packed</a>
            @elseif ($order->status == 'Packed')
            <a class="btn btn-sm btn-success" href="{{route('order.shipped',$order->id)}}"><span class="fas fa-check"></span>  Mark as shipped</a>
            @elseif ($order->status == 'Shipped')
            <a class="btn btn-sm btn-success" href="{{route('order.delivered',$order->id)}}"><span class="fas fa-check"></span>  Mark as delivered</a>
            @else
            <span class="badge bg-label-success me-1">Item Delivered</span>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>


    
  </div>
  <!-- / Content -->

@endsection