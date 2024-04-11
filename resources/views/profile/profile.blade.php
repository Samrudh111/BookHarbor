@extends('layouts.app')
@section('content')

 <!-- Content -->
 <div class="page-content bg-white">
		<!-- contact area -->
        <div class="content-block">
			<!-- Browse Jobs -->
			<section class="content-inner bg-white">
				<div class="container">
				@include('base.alerts')
					<div class="row">
						<div class="col-xl-3 col-lg-4 m-b30">
							<div class="sticky-top">
								<div class="shop-account">
									<div class="account-detail text-center">
										<div class="my-image">
											<a href="javascript:void(0);">
												<img alt="" src="https://www.gravatar.com/avatar/EMAIL_MD5?d=https%3A%2F%2Fui-avatars.com%2Fapi%2F/{{Auth::user()->first_name}}+{{Auth::user()->last_name}}/128">
											</a>
										</div>
										<div class="account-title">
											<div class="">
												<h4 class="m-b5"><a href="javascript:void(0);">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</a></h4>
											</div>
										</div>
									</div>
									<ul class="account-list">
										<li>
											<a href="" class="active"><i class="far fa-user" aria-hidden="true"></i> 
											<span>Profile</span></a>
										</li>
										<li>
											<a href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i>
											<span>My Cart</span></a>
										</li>
										<li>
									  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
											<i class="fas fa-sign-out-alt" aria-hidden="true"></i> <span>Log Out</span>
											<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                            </form> 
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-8 m-b30">
							<div class="shop-bx shop-profile">
								<div class="shop-bx-title clearfix">
									<h5 class="text-uppercase">Basic Information</h5>
								</div>
								<form action="{{route('update-profile',Auth::user()->id)}}" method="POST">
								@method('PUT')
								@csrf
									<div class="row m-b30">
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput1" class="form-label">First Name:</label>
												<input type="text" class="form-control" name="first_name" id="formcontrolinput1" value="{{Auth::user()->first_name}}" required>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput1" class="form-label">Last Name:</label>
												<input type="text" class="form-control" name="last_name" id="formcontrolinput1" value="{{Auth::user()->last_name}}" required>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput2" class="form-label">Email:</label>
												<input type="text" class="form-control" name="email" id="formcontrolinput2" value="{{Auth::user()->email}}" required readonly>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
												<label for="formcontrolinput3" class="form-label">Phone:</label>
												<input type="text" class="form-control" name="phone" id="formcontrolinput3" value="{{Auth::user()->phone}}" required>
											</div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btnhover">Save</button>
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

@endsection