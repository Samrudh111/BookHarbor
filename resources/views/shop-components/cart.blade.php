@extends('layouts.app')
@section('content')
@section('css')
    <style>
        /* Style for the loading container */
        .loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black background */
            z-index: 9999;
            /* Ensure it's on top of everything */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Style for the loading message */
        .loading-message {
            color: white;
            font-size: 18px;
            text-align: center;
        }
    </style>
@endsection

<div class="page-content">
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Cart</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"> Home</a></li>
                        <li class="breadcrumb-item">Cart</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- inner page banner End-->
    @if (isset($cart) && count($cart->cart_items) > 0)
        <!-- contact area -->
        <section class="content-inner shop-account">
            <!-- Product -->
            <div class="container">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
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
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart->cart_items as $data)
                                        <tr>
                                            <td class="product-item-img"><img
                                                    src="/storage/book_images/{{ $data->book->book_image }}"
                                                    alt=""></td>
                                            <td class="product-item-name">{{ $data->book->book_title }}</td>
                                            <td class="product-item-price">${{ $data->book->book_selling_price }}</td>
                                            <td class="product-item-quantity">
                                                <div class="quantity btn-quantity style-1 me-3">
                                                    <select name="quantity" data-id="{{ $data->id }}"
                                                        onchange="saveMe(this)">
                                                        <option value="{{ $data->quantity }}" selected disabled
                                                            style="display:none;">{{ $data->quantity }}</option>
                                                        @if ($data && $data->book->total_books >= 5)
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        @elseif ($data && $data->book->total_books >= 4)
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        @elseif ($data && $data->book->total_books >= 3)
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                        @elseif ($data && $data->book->total_books >= 2)
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        @elseif ($data && $data->book->total_books >= 1)
                                                            <option value="1">1</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="product-item-totle">${{ $data->getTotalPrice() }}</td>
                                            <td class="actions">
                                                <a href="{{ route('remove_from_cart', $data->id) }}"
                                                    class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <h4 class="widget-title">Cart Subtotal</h4>
                            <table class="table-bordered check-tbl m-b25">
                                <tbody>
                                    <tr>
                                        <td>Order Subtotal</td>
                                        <td>${{ $cart->getCartTotal() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>Calculated at checkout.</td>
                                    </tr>
                                    <tr>
                                        <td>Coupon</td>
                                        <td>You can apply coupon at checkout.</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>${{ $cart->getCartTotal() }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group m-b25">
                                <a href="{{ route('shipping-info') }}" class="btn btn-primary btnhover"
                                    type="button">Proceed to Checkout</a>
                            </div>
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
                                        <img class="m-b20 aos-item" src="images/background/yc.png" alt=""
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
                                <h2 class="title">Your Cart is Empty!</h2>
                                <p>Looks like you have not added anything to your cart.Go <br>ahead & explore wide range
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

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script>
    function saveMe(e) {
        // Show loading container with message
        $('body').append(
            '<div class="loading-container"><div class="loading-message">Updating quantity, please wait...</div></div>'
        );
        location.reload(true);

        const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        const value = $(e).val();
        const field = $(e).attr("name");
        const id = $(e).attr('data-id');

        $.ajax({
            url: '{{ route('saveMe') }}',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                value: value,
                field: field,
                id: id
            },
            success: function(data) {
                console.log(data[0]);
                if (data[0] == 1) {
                    $(e).addClass("is-invalid");
                } else {
                    $(e).addClass("is-valid");
                }
                // Remove loading container after the update is complete
                $('.loading-container').remove();
            },
            error: function(data) {
                // Remove loading container if there's an error
                $('.loading-container').remove();
            }
        });
    }
</script>
@endpush
