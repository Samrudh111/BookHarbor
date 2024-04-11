@extends('layouts.app')
@section('content')
<div class="page-content">
			<!-- inner page banner -->
			<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
				<div class="container">
					<div class="dz-bnr-inr-entry">
						<h1>Checkout</h1>
						<nav aria-label="breadcrumb" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('shipping-info')}}">Shipping Information</a></li>
								<li class="breadcrumb-item">Checkout</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- inner page banner End-->

			<!-- contact area -->
			<section class="content-inner-1">
				<!-- Product -->
				<div class="container">
                @include('base.alerts')
                <div class="row">
						<div class="col-lg-6">
							<div class="widget">
								<h4 class="widget-title">Your Order</h4>
								<table class="table-bordered check-tbl">
									<thead class="text-center">
										<tr>
											<th>BOOK</th>
											<th>BOOK NAME</th>
                                            <th>BOOK PRICE</th>
                                            <th>QUANTITY</th>
											<th>TOTAL</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($cart->cart_items as $cart_item)
										<tr>
											<td class="product-item-img"><img src="/storage/book_images/{{$cart_item->book->book_image}}" alt=""></td>
											<td class="product-item-name">{{$cart_item->book->book_title}}</td>
                                            <td class="product-price text-center">${{$cart_item->book->book_selling_price}}</td>
                                            <td class="product-price text-center">x{{$cart_item->quantity}}</td>
											<td class="product-price">${{$cart_item->getTotalPrice()}}</td>
										</tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-lg-6">
                        <div class="widget">
							<form class="shop-form" action="{{route('payment')}}" method="POST">
                            @csrf
								<h4 class="widget-title">Apply Coupon</h4>
								<div class="row">
								<div class="form-group">
									<input type="text" class="form-control" name="coupon" placeholder="Coupon Code" required>
									@if ($cart->coupon)
									<br>
									<a href="" class="btn  btn-sm btn-success">{{$cart->coupon->code}}</a>
									@endif
								</div>
								<div class="form-group">
									<button class="btn btn-primary btnhover" type="submit">Apply Coupon</button>
								</div>
							</form>
						</div>
							<form class="shop-form widget">
								<h4 class="widget-title">Order Total</h4>
								<table class="table-bordered check-tbl mb-4">
									<tbody>
										<tr>
											<td>Order Subtotal</td>
											<td class="product-price">${{$cart->getCartTotal()}}</td>
										</tr>
										<tr>
											<td>Shipping</td>
											<td>Free Shipping</td>
										</tr>
                                        @if ($cart->coupon)
										<tr>
											<td>Coupon</td>
											<td class="product-price">${{$cart->coupon->discount_price}}</td>
										</tr>
                                        @endif
										<tr>
											<td>Total</td>
											<td class="product-price-total">${{$cart->getCartTotal()}}</td>
										</tr>
									</tbody>
								</table>
					</div>
								<div class="form-group">
									<button class="btn btn-primary btnhover" id="rzp-button1">Place Order Now </button>
								</div>
							</form>
						</div>
					</div>
                </div>
			</section>
			<!-- contact area End-->
		</div>
@endsection
@push('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
        var options = {
            "key": "{{ env('RAZORPAY_KEY') }}",
            "amount": "{{$razorpay_total}}",
            "currency": "USD",
            "name": "Bookharbor",
            "description": "Purchases",
            "image": "/images/favicon2.png",
            "order_id": "{{$payment->id}}",
            "handler": function (response){

                window.location.href = '{{route("track-order",$payment->id)}}'
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function (response){
                alert(response.error.code);
                alert(response.error.description);
                alert(response.error.source);
                alert(response.error.step);
                alert(response.error.reason);
                alert(response.error.metadata.order_id);
                alert(response.error.metadata.payment_id);
        });
        document.getElementById('rzp-button1').onclick = function(e){
            rzp1.open();
            e.preventDefault();
        }
        </script>
@endpush
