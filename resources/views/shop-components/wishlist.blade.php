@extends('layouts.app')
@section('content')

<div class="page-content">
		<!-- inner page banner -->
		<div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Wishlist</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{route('home')}}"> Home</a></li>
							<li class="breadcrumb-item">Wishlist</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- inner page banner End-->
		<div class="content-inner-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table check-tbl">
									<thead>
										<tr>
											<th>Product</th>
											<th>Product name</th>
											<th>Unit Price</th>
											<th>Quantity</th>
											<th>Add to cart </th>
											<th>Close</th>
										</tr>
									</thead>
								<tbody>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book3.jpg" alt=""></td>
										<td class="product-item-name">Prduct Item 1</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle"><a href="shop-cart.html" class="btn btn-primary btnhover">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book2.jpg" alt=""></td>
										<td class="product-item-name">Prduct Item 2</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical3" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle"><a href="shop-cart.html" class="btn btn-primary btnhover">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book1.jpg" alt=""></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical4" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle"><a href="shop-cart.html" class="btn btn-primary btnhover">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book4.jpg" alt=""></td>
										<td class="product-item-name">Prduct Item 4</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
												<input id="demo_vertical5" type="text" value="1" name="demo_vertical2"/>
											</div>
										</td>
										<td class="product-item-totle"><a href="shop-cart.html" class="btn btn-primary btnhover">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book5.jpg" alt=""></td>
										<td class="product-item-name">Prduct Item 5</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical6" type="text" value="1" name="demo_vertical2"/>
										</div>
										</td>
										<td class="product-item-totle"><a href="shop-cart.html" class="btn btn-primary btnhover">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="images/books/grid/book6.jpg" alt=""></td>
										<td class="product-item-name">Prduct Item 6</td>
										<td class="product-item-price">$28.00</td>
										<td class="product-item-quantity">
											<div class="quantity btn-quantity style-1 me-3">
											<input id="demo_vertical7" type="text" value="1" name="demo_vertical2"/>
										</div>
										</td>
										<td class="product-item-totle"><a href="shop-cart.html" class="btn btn-primary btnhover">Add To Cart</a></td>
										<td class="product-item-close"><a href="javascript:void(0);" class="ti-close"></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection