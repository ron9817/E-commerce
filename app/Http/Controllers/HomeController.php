<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\Category\CategoryHelper;
use App\Helpers\AuthHelper;
use App\Helpers\Product\ProductHelper;

class HomeController extends Controller
{
    public function index(Request $request, CategoryHelper $catHelper){
        $category=$catHelper->category();
        // ["Electronics","TVs & Appliances","Men","Women","Baby & Kids","Home & Furniture","Sports, Books & More"]
        // return view("Home.index")->with("category",$category);
        $products=$catHelper->getProduct();
        return view('Home.products')->with('category',$category)->with('products',$products);
    }

    public function seller(Request $request, CategoryHelper $catHelper){
        $category=$catHelper->category();
        return view("Seller.index")->with("category",$category);
    }

    public function login(Request $request){
        return view("login");
    }

    public function postLogin(Request $request, AuthHelper $auth){
        $first_name=$request->email_number;
        $password=$request->password;
        return $auth->getPassword($first_name, $password);
    }

    public function getRegister(Request $request){
        return view('Home.register');
    }

    public function postRegister(Request $request, AuthHelper $auth){
        $first_name=$request->email_number;
        $password=$request->password;
        return $auth->register($first_name, $password);
    }

    public function getCategoryProduct(Request $request, CategoryHelper $cat, $category){
        $products=$cat->getProduct($category);
        $category_list=$cat->category();
        return view('Home.products')->with('category',$category_list)->with('category_name',$category)->with('products',$products);
    }

    public function getProductDetails(Request $request, ProductHelper $productHelper, $id){
        return $id;
    }
}
