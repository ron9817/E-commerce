<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Category\CategoryHelper;
use App\Helpers\AuthHelper;
use App\Helpers\Product\ProductHelper;
use Hash;

class CartController extends Controller
{
    public function getCart(Request $request, CategoryHelper $catHelper){
        // , CartHelper $cartHelper){
        $category=$catHelper->category();
        return view("Cart.index")->with('category',$category);
    }

    public function postCart(Request $request){
        //, CartHelper $cartHelper){
        return true;
    }
}
