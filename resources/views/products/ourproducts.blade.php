@extends('layouts.app')
@section('content')

<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
			@if (session('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }} <a href="{{route('cart')}}">View Cart</a>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif
				<div class="d-flex justify-content-between align-items-center">
					<h4 class="title">Books</h4>
				</div>
				<div class="filter-area m-b30">
					<div class="grid-area">
						<div class="shop-tab">
							<ul class="nav text-center product-filter justify-content-end" role="tablist">
								<li class="nav-item">
								<div class="category">
									<div class="filter-category">
										<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
											<i class="fas fa-list me-2"></i>
											Categories
										</a>
									</div>
								</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="acod-content collapse " id="collapseExample">
					<div class="widget widget_services">
					<div class="form-check search-content">
							<a href="{{route('ourproducts')}}"><span class="fas fa-book"></span>
							<span class="form-check-label" for="productCheckBox2">
								All Books
							</span>
							</a>
						</div>
						@foreach ($categories as $category)
						<div class="form-check search-content">
							<a href="{{route('ourproducts',$category->slug)}}"><span class="fas fa-book"></span>
							<span class="form-check-label" for="productCheckBox2">
								{{$category->book_category}}
							</span>
							</a>
						</div>
						@endforeach
					</div>
				</div>

				<div class="row book-grid-row">
					@foreach ($ourbooks as $books)
					<div class="col-book style-1">
						<div class="dz-shop-card style-1">
							<div class="dz-media">
								<img src="/storage/book_images/{{$books->book_image}}" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title"><a href="{{route('book_details',$books->book_title)}}">{{$books->book_title}}</a></h5>
								<ul class="dz-tags">
									<li><a href="{{route('ourproducts',$books->slug)}}">{{$books->category->book_category ?? ''}}</a></li>
								</ul>
								<ul class="dz-rating">
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
									<li><i class="fas fa-star text-yellow"></i></li>
								</ul>
								<div class="book-footer">
									<div class="price">
										<span class="price-num">${{$books->book_selling_price}}</span>
										<del>{{$books->book_original_price}}</del>
									</div>
									<a href="{{route('add_to_cart',$books->id)}}" class="btn btn-secondary box-btn btnhover btnhover2"><i class="fas fa-shopping-cart m-r10"></i> Add to cart</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
<!-- 				<div class="row page mt-0">
					<div class="col-md-6">
						<p class="page-text">Showing 12 from 50 data</p>
					</div>
					<div class="col-md-6">
						<nav aria-label="Blog Pagination">
							<ul class="pagination style-1 p-t20">
								<li class="page-item"><a class="page-link prev" href="javascript:void(0);">Prev</a></li>
								<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
							</ul>
						</nav>
					</div>
				</div> -->
			</div>
		</section>

	</div>


@endsection
