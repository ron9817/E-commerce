<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Category\CategoryHelper;

use App\Models\Product;

class SellerController extends Controller
{
    public function index(Request $request, CategoryHelper $catHelper){
        $category=$catHelper->category();
        return view("Home.seller")->with("category",$category);
    }

    public function login(Request $request){
        return view("login");
    }

    public function addProduct(Request $request){
        // dd($request->all());
        $product= new Product();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->category_id=$request->category;
        $product->stock=$request->stock;
        $product->seller_id=1;
        $product->image="aa";
        return $product->save();
        dd($request->all());

        return "1";
    }
}
