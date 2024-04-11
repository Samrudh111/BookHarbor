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
                                <a>
                                    My Listings
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                @if($list_count > 0)
                @foreach ($listed_books as $books)
                <div class="col-md-12 col-sm-12">
                    <div class="dz-shop-card style-2">
                        <div class="dz-media">
                            <img src="/storage/book_images/{{$books->book_image}}" alt="book">
                        </div>
                        <div class="dz-content">
                            <div class="dz-header">
                                <div>
                                @if($books->status == 'Sold Out')
                                <h1 class="badge">Sold</h1>
                                @endif
                                    <h4 class="title mb-0"><a href="book-details">{{$books->book_title}}</a></h4>
                                </div>
                                <div class="price">
                                    <span class="price-num text-primary">${{$books->book_selling_price}}</span>
                                    <del>{{$books->book_original_price}}</del>
                                </div>
                            </div>

                            <div class="dz-body">
                                <div class="dz-rating-box">
                                    <div>
                                        <p class="dz-para">{{$books->book_description}}</p>
                                        <div class="rate">
                                            <ul class="book-info">
                                                <li><span>Writen by</span>{{$books->author_name}}</li>
                                            </ul>
                                            <div class="d-flex">
                                            @if($books->status != 'Sold Out')
                                                <a href="{{route('lsold.update', ['id' => $books->id])}}"
                                                    class="btn btn-secondary btnhover btnhover2">Mark as Sold</a>
                                            @endif
                                            </div>
                                        </div>
                                        <p class="dz-para text-white">Lorem Ipsum is simply dummy text of the printing
                                            and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                            text ever since the 1500s, when an unknown printer took a galley of type and
                                            scrambled it to make a type specimen book. It has survived not only five
                                            centuries, but also the leap into electronic typesetting.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-md-12 col-sm-12">
                    <div class="dz-shop-card style-2">
                        <div class="dz-content">
                            <h3 class="dz-title">Looks Like You have Not Listed <br />Any <span
                                    class="text-primary">Books!</span></h3>
                            <p>Start Listing and </br> Sell your used Books.</p>
                            <a href="{{route('add-listing')}}" class="btn btn-secondary btnhover btnhover2">Start
                                Listing</a>
                            <img src="images/background/uc.jpg" class="uc-bg" alt=""
                                style=" width: 800px; height: 300px;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
@endif
</div>
@if($list_count > 0)
<!-- <div class="row page mt-0">
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
@endif
</div>
</section>
</div>
@endsection
