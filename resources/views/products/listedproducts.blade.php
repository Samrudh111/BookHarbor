@extends('layouts.app')
@section('content')

<div class="page-content bg-grey">
		<section class="content-inner-1 border-bottom">
			<div class="container">
			<div class="filter-area m-b30">
					<div class="grid-area">
						<div class="shop-tab">
                        <div class="category">
						<div class="filter-category">
							<a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
								Listed Books
							</a>
						</div>
					</div>
						</div>
					</div>
				</div>
				@if($listedcount>0)
			<div class="row book-grid-row">
					@foreach($listed as $books)
					<div class="col-book style-1">
						<div class="dz-shop-card style-1">
							<div class="dz-media">
								<img src="/storage/book_images/{{$books->book_image}}" alt="book">
							</div>
							<div class="dz-content">
								<h5 class="title">{{$books->book_title}}</h5>
								<h6 class="title">Seller: {{$books->first_name}}</h6>
								<span class="title">Phone: {{$books->phone}}</span>
								<div class="book-footer">
								<ul class="dz-tags">
									<li>{{$books->book_description}}</li>
								</ul>
									<div class="price">
										<span class="price-num">${{$books->book_selling_price}}</span>
										<del>${{$books->book_original_price}}</del>
									</div>
									<a href="mailto:{{$books->email}}" class="btn btn-secondary box-btn btnhover btnhover2">Chat</a>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="row page mt-0">
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
				</div>
			</div>
			@else
			<div class="col-md-12 col-sm-12">
                    <div class="dz-shop-card style-2">
                        <div class="dz-content">
                            <h3 class="dz-title">Looks Like There Is No <br />Listed <span
                                    class="text-primary">Books!</span></h3>
									<p>But No Worries, You Can Still </br> Buy Books From Our Website!</p>
                            <a href="{{route('ourproducts')}}" class="btn btn-secondary btnhover btnhover2">Visit
                                Our Books</a>
                            <img src="images/background/uc.jpg" class="uc-bg" alt=""
                                style=" width: 800px; height: 300px;" />
                        </div>
                    </div>
                </div>
				@endif
		</section>

	</div>

@endsection
