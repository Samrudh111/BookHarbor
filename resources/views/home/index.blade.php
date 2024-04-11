@extends('layouts.app')
@section('content')

	<div class="page-content bg-white">

        		<!-- Feature Product -->
		<section class="content-inner-1 bg-grey reccomend">
			<div class="container">
				<div class="section-head text-center">
					<div class="circle style-1"></div>
					<h2 class="title">Featured Books</h2>
				</div>
			</div>
            	<!-- Client Start-->
		<div class="bg-grey py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper-container books-wrapper-3 swiper-four">
					<div class="swiper-wrapper">
						@foreach ($product_globe as $product)
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.2s">
								<div class="dz-media">
									<img src="/storage/book_images/{{$product->book_image}}" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{route('book_details',$product->book_title)}}">{{$product->book_title}}</a></h5>
									<ul class="dz-tags">
										<li><a href="{{route('ourproducts',$product->category->slug)}}">{{$product->category->book_category ?? ''}}</a></li>
									</ul>
									<div class="book-footer">
										<div class="price">
											<span class="price-num">${{$product->book_selling_price}}</span>
											<del>${{$product->book_original_price}}</del>
										</div>
									</div>
									@if($product && $product->total_books <= 30)
									<marquee>
									<span class="text-danger">
										Hurry Up! Only {{$product->total_books}} books left.
									</span>
									</marquee>
									@endif
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->

		</section>
		<!-- Feature Product End -->

<!-- Book Sale -->
@if($list_count>0)
<section class="content-inner-1">
			<div class="container">
				<div class="section-head book-align">
					<h2 class="title mb-0">Listed Books on Sale</h2>
					<div class="pagination-align style-1">
						<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
						<div class="swiper-pagination-two"></div>
						<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
					</div>
				</div>
				<div class="swiper-container books-wrapper-3 swiper-four">
					<div class="swiper-wrapper">
						@foreach ($listed_books as $books)
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="/storage/book_images/{{$books->book_image}}" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title">{{$books->book_title}}</h5>
									<ul class="dz-tags">
										<li><a href="">{{$books->book_category}}</a></li>
									</ul>
									<div class="book-footer">
										<div class="price">
											<span class="price-num">${{$books->book_selling_price}}</span>
											<del>{{$books->book_original_price}}</del>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		<!-- Book Sale End -->
		@endif

		<!--Recommend Section Start-->
		<section class="content-inner-1 bg-grey reccomend">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="title">Recomended For You</h2>
				</div>
				<!-- Swiper -->
				<div class="swiper-container swiper-two">
					<div class="swiper-wrapper">
						@foreach ($products_offer as $product)
						<div class="swiper-slide">
							<div class="books-card style-1 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="/storage/book_images/{{$product->book_image}}" alt="book">
								</div>
								<div class="dz-content">
									<h4 class="title">{{$product->book_title ?? ''}}</h4>
									<span class="price">${{$product->book_selling_price}}</span>
									@if($product && $product->total_books <= 30)
									<marquee>
									<span class="text-danger">
										Hurry Up! Only {{$product->total_books}} books left.
									</span>
									</marquee>
									@endif
									<a href="{{route('add_to_cart',$product->id)}}" class="btn btn-secondary btnhover btnhover2"><i class="fas fa-cart-shopping"></i>  Add to cart</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>



	</div>

		@endsection
