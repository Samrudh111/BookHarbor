@extends('auth-layouts.auth-app')
@section('auth-content')

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>{{ __('Login') }}</h1>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->

			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content">
									<h4>NEW CUSTOMER</h4>
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="{{ route('register') }}">CREATE AN ACCOUNT</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
								<form id="login" class="tab-pane active col-12" method="POST" action="{{ route('login') }}">
									@csrf
									<h4 class="text-secondary">LOGIN</h4>
										<p class="font-weight-600">If you have an account with us, please log in.</p>
										<div class="mb-4">
											<label class="label-title">E-MAIL *</label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
										</div>
										<div class="mb-4">
											<label class="label-title">PASSWORD *</label>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										</div>
										<div class="text-left">
										<button type="submit" class="btn btn-primary btnhover me-2">
                                    {{ __('Login') }}
                                </button>
											<a data-bs-toggle="tab" href="#forgot-password" class="m-l5"><i class="fas fa-unlock-alt"></i> Forgot Password</a>
										</div>
									</form>
									<form id="forgot-password" class="tab-pane fade col-12">
										<h4 class="text-secondary">FORGET PASSWORD ?</h4>
										<p class="font-weight-600">We will send you an email to reset your password. </p>
										<div class="mb-3">
											<label class="label-title">E-MAIL *</label>
											<input name="dzName" required="" class="form-control" placeholder="Your Email Id" type="email">
										</div>
										<div class="text-left">
											<a class="btn btn-outline-secondary btnhover m-r10" data-bs-toggle="tab" href="#login">Back</a>
											<button class="btn btn-primary btnhover">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Product END -->
			</section>
			<!-- contact area End-->
	</div>
@endsection
