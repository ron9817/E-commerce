<?php

namespace App\Helpers\Product;

use App\Models\Product;

use Carbon\Carbon;

class ProductHelper
{
    public function get($seller_id=NULL){
        if(isset($seller_id))
            $products=Product::with(["category:id,display_name"])->where('seller_id',$seller_id)->get();
        else
            $products=Product::all();
        $prod=[];
        foreach($products as $p_key=>$p){
            array_push($prod,[
                'title'=>$p->title,
                'stock'=>$p->stock,
                'category'=>$p->category->display_name,
                'images'=>$p->image,
                'description'=>$p->description
            ]);
        }
        return $prod;
    }

    public function save($request){
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
