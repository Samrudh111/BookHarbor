@extends('layouts.app')
@section('content')

    <div class="page-content">
        <!-- inner page banner -->
        <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>My Orders</h1>
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home</a></li>
                            <li class="breadcrumb-item">My Orders</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- inner page banner End-->
        @if (!$orders->isEmpty())
            <!-- contact area -->
            <section class="content-inner shop-account">
                <!-- Product -->
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table check-tbl">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Product name</th>
                                            <th>Unit Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            @if ($order->cart)
                                                @foreach ($order->cart->cart_items as $cart_item)
                                                    <tr>
                                                        <td class="product-item-img"><img
                                                                src="/storage/book_images/{{ $cart_item->book->book_image }}"
                                                                alt="{{ $cart_item->book->book_title }}"></td>
                                                        <td class="product-item-name">{{ $cart_item->book->book_title }}
                                                        </td>
                                                        <td class="product-item-price">
                                                            ${{ $cart_item->book->book_selling_price }}</td>
                                                        <td class="product-item-quantity">
                                                            {{ $cart_item->quantity }}
                                                        </td>
                                                        <td class="product-item-totle">${{ $cart_item->getTotalPrice() }}
                                                        </td>
                                                        <td><span class="badge badge-success">{{ $order->status }}</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-primary"
                                                                href="{{ route('track-order', $order->r_pay_id) }}">Track
                                                                Order</a>
                                                            <!-- <button class="btn btn-danger">Cancel Order</button> -->
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Product END -->
            </section>
            <!-- contact area End-->
        @else
            <section class="content-inner overlay-white-middle">
                <div class="container">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="row about-style1 align-items-center">
                        <div class="col-lg-6 m-b30">
                            <div class="row sp10 about-thumb">
                                <div class="col-sm-6 aos-item" data-aos="fade-up" data-aos-duration="800"
                                    data-aos-delay="200">
                                    <div class="split-box">
                                        <div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="split-box ">
                                        <div>
                                            <img class="m-b20 aos-item" src="images/background/no-orders.png" alt=""
                                                data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-b30 aos-item" data-aos="fade-up" data-aos-duration="800"
                            data-aos-delay="500">
                            <div class="about-content px-lg-4">
                                <div class="section-head style-1">
                                    <h2 class="title">No Orders Yet!</h2>
                                    <p>Looks like you have not ordered anything yet! <br> Go ahead & explore wide range
                                        of books available in our store.</p>
                                </div>
                                <a href="{{ route('ourproducts') }}"
                                    class="btn btn-primary btnhover shadow-primary">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

    </div>

@endsection
