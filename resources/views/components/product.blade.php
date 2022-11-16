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
                                <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
