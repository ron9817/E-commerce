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

    public function getProduct($category=Null){
        if(!isset($category))
            $products=Product::with(['category:id,display_name'])->get();
        else
            $products=Product::whereHas('category',function ($query) use($category){
                $query->where('display_name',$category);
            })
            ->with(['category:id,display_name'])
            ->get();
        return $products;
        // => function ($query) use($category){
        //     $query->where('display_name',$category);
        // }


        // with(['category:id,display_name'])
        //     ->where('category.display_name',$category)
    }
    
}
