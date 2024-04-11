@extends('layouts.app')
@section('content')

<div class="page-content">
    <!-- inner page banner -->
    <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm" style="background-image:url(images/background/bg3.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Shipping Information</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('cart')}}"> Cart</a></li>
                        <li class="breadcrumb-item">Shipping Information</li>
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
            <form class="shop-form" action="{{route('shipping-info')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="widget">
                            <h4 class="widget-title">Billing & Shipping Address</h4>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    @if($profile && $profile->full_name)
                                    <input type="text" class="form-control" name="full_name" value="{{$profile->full_name}}" required autofocus>
                                    @else
                                    <input type="text" class="form-control" name="full_name" value="{{Auth::user()->first_name}} {{Auth::user()->last_name}}" required autofocus>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                @if($profile && $profile->address)
                                <input type="text" class="form-control" name="address" value="{{$profile->address}}" required>
                                @else
                                <input type="text" class="form-control" name="address" placeholder="Address" required>
                                @endif
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    @if($profile && $profile->landmark)
                                    <input type="text" class="form-control" name="landmark" value="{{$profile->landmark}}">
                                    @else
                                    <input type="text" class="form-control" name="landmark" placeholder="Landmark (Optional)">
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-select text-black" name="state" id="inputState">
                                        @if ($profile && $profile->state)
                                        <option value="{{$profile->state}}" selected style="display: none;">{{$profile->state}}</option>
                                        @else
                                        <option selected disabled style="display: none;">--SELECT STATE--</option>
                                        @endif
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky">Kentucky</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts">Massachusetts</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania">Pennsylvania</option>
                                        <option value="Rhode Island">Rhode Island</option>
                                        <option value="South Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="Wisconsin">Wisconsin</option>
                                        <option value="Wyoming">Wyoming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <select class="form-select text-black" id="inputCity" name="city">
                                        @if ($profile && $profile->city)
                                        <option value="{{$profile->city}}" selected style="display:none;">{{$profile->city}}</option>
                                        @else
                                        <option selected disabled style="display:none;">City</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    @if ($profile && $profile->pincode)
                                    <input type="tel" class="form-control" minlength="5" maxlength="5" name="pincode" value="{{$profile->pincode}}" required>
                                    @else
                                    <input type="tel" class="form-control" minlength="5" maxlength="5" name="pincode" placeholder="Postcode / Zip" required>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="country" value="USA" required readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    @if ($profile && $profile->phone)
                                    <input type="tel" class="form-control" name="phone" minlength="10" maxlength="10" value="{{$profile->phone}}" required>
                                    @else
                                    <input type="tel" class="form-control" name="phone" minlength="10" maxlength="10" value="{{Auth::user()->phone}}" required>
                                    @endif
                                </div>
                            </div>
                            <button class="btn btn-primary btnhover mb-3" type="submit">Save &amp; Proceed to Checkout</button>
                        </div>
                    </div>
                </div>
            </form>
    </section>
    <!-- contact area End-->
</div>

@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/us-states.js"></script>
@endpush
