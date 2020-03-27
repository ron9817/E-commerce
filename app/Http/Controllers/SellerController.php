<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Category\CategoryHelper;
use App\Helpers\Product\ProductHelper;


class SellerController extends Controller
{
    public function index(Request $request, CategoryHelper $catHelper, ProductHelper $productHelper){
        $seller_id=1;
        $category=$catHelper->category();
        $products=$productHelper->get($seller_id);
        return view("Home.seller")->with("category",$category)->with("products",$products)->with("orders",[]);
    }

    public function login(Request $request){
        return view("login");
    }

    public function addProduct(Request $request, ProductHelper $productHelper){
        // dd($request->all());
        return $productHelper->save($request);
    }
}
