@extends('layouts.app')
@section('title')
    {{ $product['product_name'] }}
@stop
@section('content')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/singleProducts/singleProducts.css') }}">
@stop

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="{{ asset($product['product_image']) }}" alt="..." />
            </div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: {{ $product['product_sku'] }}</div>
                <h1 class="display-5 fw-bolder">{{ $product['product_name'] }}</h1>
                <div class="fs-5 mb-5">
                    {{-- <span class="text-decoration-line-through">Rs. {{$product['product_price']}}</span> --}}
                    <span>Rs. {{ $product['product_price'] }}</span>
                </div>
                <p class="lead">
                    {{ $product['product_description'] }}
                </p>
                <div class="small mb-1">Stock: {{ $product['product_stock'] }}</div>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                        style="max-width: 3rem" name="qty" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button"
                        onclick="addToCart({{ $product['id'] }})">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('script')
<script>
    function addToCart(id) {
        let qty = document.getElementById('inputQuantity').value;

        let min_qty = '{{ $product['product_stock'] }}';

        if (qty == '0' || qty == '' || qty > min_qty) {
            alert('Please Enter Valid Quantity!');
            return
        }


        let url = '{{ env('APP_URL') . 'addToCart' }}';

        $.ajax({
            type: "POST",
            url: url,
            data: {
                qty: qty,
                product_id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                console.log(data);

                if (data.status == true) {
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            },
            error: function(data, textStatus, errorThrown) {
                console.log(data);
            },
        });
    }
</script>
@stop
