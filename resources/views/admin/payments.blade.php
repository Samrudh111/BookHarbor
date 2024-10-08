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
    <span>Session</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">21,459</h4>
      <small class="text-success">(+29%)</small>
    </div>
    <small>Total Users</small>
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
    <span>Paid Users</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">4,567</h4>
      <small class="text-success">(+18%)</small>
    </div>
    <small>Last week analytics </small>
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
    <span>Active Users</span>
    <div class="d-flex align-items-end mt-2">
      <h4 class="mb-0 me-2">19,860</h4>
      <small class="text-danger">(-14%)</small>
    </div>
    <small>Last week analytics</small>
  </div>
  <span class="badge bg-label-success rounded p-2">
    <i class="bx bx-group bx-sm"></i>
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
      <h4 class="mb-0 me-2">237</h4>
      <small class="text-success">(+42%)</small>
    </div>
    <small>Last week analytics</small>
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
          <h3>Payments</h3>
          </div>
      </div>
    </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Project</th>
          <th>Client</th>
          <th>Users</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <tr>
          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
          <td>Albert Cook</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-primary me-1">Active</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
          <td>Barry Hunter</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-success me-1">Completed</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
          <td>Trevor Baker</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-info me-1">Scheduled</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td><i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong></td>
          <td>Jerry Milton</td>
          <td>
            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                <img src="assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                <img src="assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
              </li>
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="assets/img/avatars/7.png" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
          </td>
          <td><span class="badge bg-label-warning me-1">Pending</span></td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>


    
  </div>
  <!-- / Content -->

@endsection