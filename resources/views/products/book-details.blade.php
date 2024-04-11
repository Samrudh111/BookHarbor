@extends('layouts.app')
@section('content')

    <div class="page-content bg-grey">
        <section class="content-inner-1">
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }} <a href="{{ route('cart') }}"><strong>View Cart</strong></a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row book-grid-row style-4 m-b60">
                    <div class="col">
                        <div class="dz-box">
                            <div class="dz-media">
                                <img src="/storage/book_images/{{ $books->book_image }}" alt="book">
                            </div>
                            <div class="dz-content">
                                <div class="dz-header">
                                    <h3 class="title">{{ $books->book_title }}</h3>
                                    <div class="shop-item-rating">
                                        <div class="d-lg-flex d-sm-inline-flex d-flex align-items-center">
                                            <ul class="dz-rating">
                                                <li><i class="fas fa-star text-yellow"></i></li>
                                                <li><i class="fas fa-star text-yellow"></i></li>
                                                <li><i class="fas fa-star text-yellow"></i></li>
                                                <li><i class="fas fa-star text-yellow"></i></li>
                                                <li><i class="fas fa-star text-muted"></i></li>
                                            </ul>
                                            <h6 class="m-b0">4.0</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="dz-body">
                                    <div class="book-detail">
                                        <ul class="book-info">
                                            <li>
                                                <div class="writer-info">
                                                    <div>
                                                        <span>Writen by</span>{{ $books->author_name }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li><span>Publisher</span>{{ $books->publisher_name }}</li>
                                            <li><span>Year</span>{{ $books->published_date }}</li>
                                        </ul>
                                    </div>
                                    <p class="text-1">{{ $books->book_description }}</p>
                                    <div class="book-footer">
                                        <div class="price">
                                            <h5>${{ $books->book_selling_price }}</h5>
                                            <p class="p-lr10">{{ $books->book_original_price }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="{{ route('add_to_cart', $books->id) }}"
                                        class="btn btn-primary btnhover btnhover2"><i
                                            class="fas fa-shopping-cart m-r10"></i> <span>Add to cart</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row">
                    <div class="col-xl-8">
                        <div class="product-description tabs-site-button">
                            <ul class="nav nav-tabs">
                                <li><a data-bs-toggle="tab" href="#developement-1" class="active">Customer Reviews</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="developement-1" class="tab-pane show active">
                                    <div class="clear" id="comment-list">
                                        <div class="post-comments comments-area style-1 clearfix">
                                            <h4 class="comments-title">4 COMMENTS</h4>
                                            <div id="comment">
                                                <ol class="comment-list">
                                                    <li class="comment even thread-even depth-1 comment" id="comment-2">
                                                        <div class="comment-body">
                                                            <div class="comment-author vcard">
                                                                <img src="/images/profile4.jpg" alt=""
                                                                    class="avatar" />
                                                                <cite class="fn">Michel Poe</cite> <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">December 28, 2022 at 6:14
                                                                        am</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dlab-page-text">
                                                                <p>Donec suscipit porta lorem eget condimentum. Morbi vitae
                                                                    mauris in leo venenatis varius. Aliquam nunc enim,
                                                                    egestas ac dui in, aliquam vulputate erat.</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="javascript:void(0);"><i class="fa fa-reply"></i>
                                                                    Reply</a>
                                                            </div>
                                                        </div>
                                                        <ol class="children">
                                                            <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment"
                                                                id="comment-3">
                                                                <div class="comment-body" id="div-comment-3">
                                                                    <div class="comment-author vcard">
                                                                        <img src="/images/profile3.jpg" alt=""
                                                                            class="avatar" />
                                                                        <cite class="fn">Celesto Anderson</cite> <span
                                                                            class="says">says:</span>
                                                                        <div class="comment-meta">
                                                                            <a href="javascript:void(0);">December 28, 2022
                                                                                at 6:14 am</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comment-content dlab-page-text">
                                                                        <p>Donec suscipit porta lorem eget condimentum.
                                                                            Morbi vitae mauris in leo venenatis varius.
                                                                            Aliquam nunc enim, egestas ac dui in, aliquam
                                                                            vulputate erat.</p>
                                                                    </div>
                                                                    <div class="reply">
                                                                        <a class="comment-reply-link"
                                                                            href="javascript:void(0);"><i
                                                                                class="fa fa-reply"></i> Reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                    <li class="comment even thread-odd thread-alt depth-1 comment"
                                                        id="comment-4">
                                                        <div class="comment-body" id="div-comment-4">
                                                            <div class="comment-author vcard">
                                                                <img src="/images/profile2.jpg" alt=""
                                                                    class="avatar" />
                                                                <cite class="fn">Ryan</cite> <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">December 28, 2022 at 6:14
                                                                        am</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dlab-page-text">
                                                                <p>Donec suscipit porta lorem eget condimentum. Morbi vitae
                                                                    mauris in leo venenatis varius. Aliquam nunc enim,
                                                                    egestas ac dui in, aliquam vulputate erat.</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a class="comment-reply-link"
                                                                    href="javascript:void(0);"><i class="fa fa-reply"></i>
                                                                    Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment odd alt thread-even depth-1 comment"
                                                        id="comment-5">
                                                        <div class="comment-body" id="div-comment-5">
                                                            <div class="comment-author vcard">
                                                                <img src="/images/profile1.jpg" alt=""
                                                                    class="avatar" />
                                                                <cite class="fn">Stuart</cite> <span
                                                                    class="says">says:</span>
                                                                <div class="comment-meta">
                                                                    <a href="javascript:void(0);">December 28, 2022 at 6:14
                                                                        am</a>
                                                                </div>
                                                            </div>
                                                            <div class="comment-content dlab-page-text">
                                                                <p>Donec suscipit porta lorem eget condimentum. Morbi vitae
                                                                    mauris in leo venenatis varius. Aliquam nunc enim,
                                                                    egestas ac dui in, aliquam vulputate erat.</p>
                                                            </div>
                                                            <div class="reply">
                                                                <a rel="nofollow" class="comment-reply-link"
                                                                    href="javascript:void(0);"><i class="fa fa-reply"></i>
                                                                    Reply</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div> -->
                                            <!-- <div class="default-form comment-respond style-1" id="respond">
                                                <h4 class="comment-reply-title" id="reply-title">LEAVE A REPLY <small> <a
                                                            rel="nofollow" id="cancel-comment-reply-link"
                                                            href="javascript:void(0)" style="display:none;">Cancel
                                                            reply</a> </small></h4>
                                                <div class="clearfix">
                                                    <form method="post" id="comments_form" class="comment-form"
                                                        novalidate>
                                                        <p class="comment-form-author"><input id="name"
                                                                placeholder="Author" name="author" type="text"
                                                                value=""></p>
                                                        <p class="comment-form-email"><input id="email"
                                                                required="required" placeholder="Email" name="email"
                                                                type="email" value=""></p>
                                                        <p class="comment-form-comment">
                                                            <textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45"
                                                                rows="3" required="required"></textarea>
                                                        </p>
                                                        <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
                                                            <button id="submit" type="submit"
                                                                class="submit btn btn-primary filled">
                                                                Submit Now <i class="fa fa-angle-right m-l10"></i>
                                                            </button>
                                                        </p>
                                                    </form>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- @if ($books->similarProducts)
                        <div class="col-xl-4 mt-5 mt-xl-0">
                            <div class="widget">
                                <h4 class="widget-title">Related Books</h4>
                                <div class="row">
                                    @foreach ($books->similarProducts as $book)
                                        <div class="col-xl-12 col-lg-6">
                                            <div class="dz-shop-card style-5">
                                                <div class="dz-media">
                                                    <img src="/storage/book_images/{{ $book->book_image }}"
                                                        alt="">
                                                </div>
                                                <div class="dz-content">
                                                    <h5 class="subtitle">{{ $book->book_title }}</h5>
                                                    <ul class="dz-tags">
                                                        <li>{{ $book->category->category_name }}</li>
                                                    </ul>
                                                    <div class="price">
                                                        <span class="price-num">${{ $book->book_selling_price }}</span>
                                                        <del>{{ $book->book_original_price }}</del>
                                                    </div>
                                                    <a href="{{ route('add_to_cart', $book->id) }}"
                                                        class="btn btn-outline-primary btn-sm btnhover btnhover2"><i
                                                            class="fas fa-shopping-cart me-2"></i> Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div> -->
                    @endif
                </div>
            </div>
        </section>
    </div>

@endsection
