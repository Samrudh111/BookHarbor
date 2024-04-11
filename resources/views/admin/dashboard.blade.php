@extends('admin-layouts.admin-app')
@section('admin-content')

<!-- Content wrapper -->
<div class="content-wrapper">
<!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">

        <div class="col-md-12 col-lg-4">
            <div class="row">
            <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                <div class="card">
                <div class="card-body">
                    <span class="d-block fw-semibold">Total Users</span>
                    <h3 class="card-title mb-2">{{$userCount ?? 0}}</h3>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg-6 mb-4">
                <div class="card">
                <div class="card-body">
                    <span class="d-block fw-semibold">Pending Users</span>
                    <h3 class="card-title mb-2">{{$pendingUsers ?? 0}}</h3>
                </div>
                </div>
            </div>
            </div>
        </div>
    @if (!$users->isEmpty())
        <div class="col-md-6 col-lg-8 mb-4 mb-md-0">
            <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table text-nowrap">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                    <tr>
                    <td> {{$user->id}}</td>
                    <td>
                        <div class="d-flex align-items-center">
                        <img src="https://www.gravatar.com/avatar/EMAIL_MD5?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{{$user->first_name}}+{{$user->last_name}}/128" alt="{{$user->first_name}}" height="32" width="32" class="me-2">
                        <div class="d-flex flex-column">
                            <span class="fw-semibold lh-1">{{$user->first_name}} {{$user->last_name}}</span>
                        </div>
                        </div>
                    </td>
                    <td>
                        {{$user->address->city ?? 'N/A'}}

                    </td>
                    <td>@if ($user->is_email_verified == '1')
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
    @endif
        </div>


</div>
          <!-- / Content -->

@endsection

