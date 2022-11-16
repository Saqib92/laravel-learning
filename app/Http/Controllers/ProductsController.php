<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Validator;

class ProductsController extends Controller
{
    function index(){
        $featured = Product::where('is_featured', 'true')->get();
        $new_arrival = Product::where('is_featured', 'false')->get();

        return view('home', ['featured' =>$featured, 'new_arrival' => $new_arrival]);
    }

    function getSingleProduct($id){
        $data = Product::find($id);
        return view('singleProduct', ['product'=> $data]);
    }

    function addProduct(Request $req){
        $req->validate([
            'product_name' => 'required',
            'product_sku' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required'
        ]);


        $pro = new Product;
        $pro->product_name = $req->product_name;
        $pro->product_sku = $req->product_sku;        
        $pro->product_price = $req->product_price;
        $pro->product_category_id = $req->product_category;
        $pro->product_description = $req->product_description;
        $pro->product_type = '';

        if($req->has('is_featured')){
            $pro->is_featured = 'true';
        }else{
            $pro->is_featured = 'false';
        }        

        $file = $req->file('product_image');
        $path = $file->move('assets/imgs/home-products/', Date('Y-m-d-s').'.'.$file->getClientOriginalExtension());
        $pro->product_image = $path;

        $res = $pro-> save();

        if($res){
            return redirect('addproduct')->withSuccess("Product successfully added!");
        }else{
            return redirect('addproduct')->withErrors("Somethign Went Wrong!");
        }
    }
}
