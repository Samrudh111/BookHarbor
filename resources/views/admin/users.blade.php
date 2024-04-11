@extends('admin-layouts.admin-app')
@section('admin-content')

 <!-- Content wrapper -->
 <div class="content-wrapper">

<!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    
    

<div class="row g-4 mb-4">
<div class="col-sm-6 col-xl-3">
<div class="card">
<div class="card-body">
<div class="d-flex align-items-start justify-content-between">
  <div class="content-left">
    <span>Paid Users</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">{{ $usersWithPayments->count() ?? 0}}</h4>
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
    <span>Pending Users</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">{{$unverifiedUsersCount ?? 0}}</h4>
    </div>
  </div>
  <span class="badge bg-label-warning rounded p-2">
    <i class="bx bx-user-voice bx-sm"></i>
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
          <h3>Users List</h3>
          </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>User</th>
          <th>City</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->first_name}} {{$user->last_name}}</strong></td>
          <td>{{$user->address->city ?? 'N/A'}}</td>
          <td>
            @if ($user->is_email_verified == '1')
            <span class="badge bg-label-success me-1">Verified</span>
            @elseif ($user->is_email_verified == '0')
            <span class="badge bg-label-warning me-1">Not Verified</span>
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