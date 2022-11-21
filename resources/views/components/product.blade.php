<div class="album mt-3 mb-3 bg-light">
    <div class="container">

        <div class="row g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <a href={{ "product/" . $id }}>
                        <img src="{{asset($image)}}" class="bd-placeholder-img card-img-top product-img"/>
                    </a>
                    
                    <div class="card-body">
                        <p class="card-text">
                            <h5 class="product-name">{{$title}}</h5>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">Rs. {{$price}}</small>
                            <div class="btn-group">
                                <button class="btn btn-outline-dark flex-shrink-0" type="button"
                                    onclick="addToCart({{ $id }})">
                                    <i class="bi-cart-fill me-1"></i>
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@section('script')
<script>
    function addToCart(id) {
        console.log(id)
        let url = '{{ env('APP_URL') . 'addToCart' }}';

        $.ajax({
            type: "POST",
            url: url,
            data: {
                qty: '1',
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
