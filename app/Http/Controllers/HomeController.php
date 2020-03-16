<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Category\CategoryHelper;

class HomeController extends Controller
{
    public function index(Request $request, CategoryHelper $catHelper){
        $category=$catHelper->category();
        // ["Electronics","TVs & Appliances","Men","Women","Baby & Kids","Home & Furniture","Sports, Books & More"]
        return view("Home.index")->with("category",$category);
    }

    public function seller(Request $request, CategoryHelper $catHelper){
        
        return view("Home.seller");
    }

    public function login(Request $request){
        return view("login");
    }

    public function signin(Request $request){
        dd($request->all());
        return 1;
    }
}
