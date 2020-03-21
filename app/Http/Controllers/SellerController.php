<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Category\CategoryHelper;

use App\Models\Product;

use Carbon\Carbon;

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
        $seller_id=1;
        $product= new Product();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->category_id=$request->category;
        $product->stock=$request->stock;
        $product->seller_id=$seller_id;
        $product->image=$request->file('image')->storeAs("Seller/".$seller_id,Carbon::now()->timestamp.".".$request->file('image')->getClientOriginalExtension());
        return $product->save();
    }
}
