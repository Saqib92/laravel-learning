@extends('layouts.app')
@section('title')
    Add Product
@stop
@section('content')


    @if (session()->has('success'))
        <div class="container mt-3">
            <div class="alert alert-success" role="alert">
                Product Added Successfully!
            </div>
        </div>
    @endif

    @if ($errors->any())
        <div class="container mt-3">
            <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
            </div>
        </div>
    @endif

    <div class="text-center mt-5 mb-5">
        <main class="w-100 m-auto" style="max-width: 400px;padding: 15px;">
            <form action="addProduct" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mb-3 fw-normal">Add Product</h1>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="product_name" id="floatingInput"
                        placeholder="Product Name">
                    <label for="floatingInput">Product Name</label>
                    @error('product_name')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="product_sku" id="floatingInput"
                        placeholder="Product SKU">
                    <label for="floatingInput">Product SKU</label>
                    @error('product_sku')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="product_price" id="floatingInput"
                        placeholder="Product Price">
                    <label for="floatingInput">Product Price</label>
                    @error('product_price')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" name="product_stock" id="floatingInput"
                        placeholder="Product Stock">
                    <label for="floatingInput">Product Stock</label>
                    @error('product_stock')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="product_category" id="floatingInput"
                        placeholder="Product Category">
                    <label for="floatingInput">Product Category</label>
                    @error('product_category')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <textarea type="text" class="form-control" rows="3" name="product_description" id="floatingInput"
                        placeholder="Product Description"></textarea>
                    <label for="floatingInput">Product Description</label>
                    @error('product_description')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02" name="product_image">
                    <label class="input-group-text" for="inputGroupFile02">Product Image</label>
                    @error('product_image')
                        <strong class="text-danger">{{ $message }}*</strong>
                    @enderror
                </div>


                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="is_featured"> Is Featured
                    </label>
                </div>
                @error('is_featured')
                    <strong class="text-danger">{{ $message }}*</strong>
                @enderror

                <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
            </form>
        </main>
    </div>

@endsection
