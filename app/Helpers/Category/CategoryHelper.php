<?php

namespace App\Helpers\Category;

use App\Models\Category;

class CategoryHelper
{
    public function category(){
        $categories=Category::all(["display_name"]);
        $category=[];
        foreach ($categories as $ckey => $cvalue) {
            array_push($category,$cvalue->display_name);
        }
        // dd($category);
        return $category;
        
    }
}
