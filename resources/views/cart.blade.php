@extends('layouts.app')
@section('title')
    Cart
@stop
@section('content')


    <section class="h-100 h-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                            <h6 class="mb-0 text-muted">{{count($cartItems)}} Items</h6>
                                        </div>
                                        <hr class="my-4">
                                        {{-- {{dd($cartItems)}} --}}
                                        @php $total = 0 @endphp
                                        @foreach ($cartItems as $item)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{asset($item['product_image'])}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">{{$item['product_name']}}</h6>
                                                    <h6 class="text-black mb-0">Rs. {{$item['product_price']}}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                    <button class="btn btn-dark px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="fas fa-minus"></i>
                                                        <i class="bi bi-cart-dash"></i>
                                                    </button>

                                                    <input id="form1" min="0" name="quantity" value="{{$item['qty']}}"
                                                        type="number" class="form-control form-control-sm" />

                                                    <button class="btn btn-dark px-2"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">                                                        
                                                        <i class="bi bi-cart-plus"></i>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">Total {{$item['product_price'] * $item['qty'] }}</h6>
                                                </div>
                                                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                </div>
                                            </div>

                                            <hr class="my-4">

                                            @php $total += $item['product_price'] * $item['qty'] @endphp

                                        @endforeach


                                        <div class="pt-5">
                                            <h6 class="mb-0">
                                                <a href="/" class="text-body">
                                                    <i class="fas fa-long-arrow-alt-left me-2"></i>
                                                    Back to shop
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                        <hr class="my-4">

                                        {{-- <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">items {{count($cartItems)}}</h5>
                                            <h5>Rs.  {{$total}}</h5>
                                        </div> --}}

                                        <h5 class="text-uppercase mb-3">Shipping</h5>

                                        <div class="mb-4 pb-2">
                                            Address: Matalala bill house, Gora qabristan karachi, NEar FTC
                                        </div>

                                        <h5 class="text-uppercase mb-3">Give code</h5>

                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Total price</h5>
                                            <h5>Rs. {{$total}}</h5>
                                        </div>

                                        <button type="button" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark">Checkout</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
