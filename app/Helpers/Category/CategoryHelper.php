<?php

namespace App\Helpers\Category;

use App\Models\Category;
use App\Models\Product;

class CategoryHelper
{
    public function category(){
        $categories=Category::all(["display_name","id"]);
        $category=[];
        foreach ($categories as $ckey => $cvalue) {
            array_push($category,[
                'id'=>$cvalue->id,
                'name'=>$cvalue->display_name
                ]);
        }
        // dd($category);
        return $category;
    }

    public function getProduct($category){
        $products=Product::where('category_id',$category)->get();
        return $products;
    }
    
}
