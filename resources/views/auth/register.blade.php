@extends('auth-layouts.auth-app')
@section('auth-content')

		<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>{{ __('REGISTER') }}</h1>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->

			<!-- contact area -->
			<section class="content-inner shop-account">
				<!-- Product -->
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 mb-4">
							<div class="login-area">
								<div class="tab-content">
									<h4>Already have an account?</h4>
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
									<a class="btn btn-primary btnhover m-r5 button-lg radius-no" href="{{ route('login') }}">LOGIN</a>
								</div>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 mb-4">
							<div class="login-area">
								<div class="tab-content nav">
								<form method="POST" action="{{ route('register') }}">
								@csrf
										<h4 class="text-secondary">REGISTER</h4>
										<p class="font-weight-600">Please, fill in all the details.</p>
                                        <div class="row m-b30">
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
                                            <label class="label-title">First Name *</label>
											<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

											@error('first_name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
                                            <label class="label-title">Last Name *</label>
											<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">

											@error('last_name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
                                            <label class="label-title">E-Mail *</label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
                                            <label class="label-title">Mobile Number *</label>
											<input id="phone" type="tel" maxlength="10" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
											<input type="hidden" name="role" value="user">

											@error('phone')
												<span class="invalid-feedback" role="alert">
													<strong>{{$message}}</strong>
												</span>
											@enderror
											</div>
										</div>
                                        <div class="col-lg-12 col-md-12">
											<div class="mb-3">
                                            <label class="label-title">Alternate Mobile Number (optional)</label>
												<input type="tel" maxlength="10" class="form-control" id="alternate_phone" name="alternate_phone" value="{{ old('alternate_phone') }}" autocomplete="phone">
											</div>
										</div>
                                        <div class="col-lg-6 col-md-6">
											<div class="mb-3">
                                            <label class="label-title">Password *</label>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="mb-3">
                                            <label class="label-title">Confirm Password *</label>
											<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
											</div>
										</div>
									</div>
                                    <button class="btn btn-primary btnhover">Register</button>
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
