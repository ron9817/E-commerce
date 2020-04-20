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
                'description'=>$p->description,
                'price'=>$p->price
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
        $product->price=$request->price;
        $product->image=$request->file('image')->storeAs(public_path("Seller/".$seller_id),Carbon::now()->timestamp.".".$request->file('image')->getClientOriginalExtension());
        return $product->save();
    }

    public function get_detailed_product($product_id=NULL){
        if(isset($product_id))
            $product=Product::with(["category:id,display_name"])->find($product_id);
        if(isset($product)){
            return [
                'id'=>$product->id,
                'title'=>$product->title,
                'stock'=>$product->stock,
                'category'=>$product->category->display_name,
                'images'=>$product->image,
                'description'=>$product->description,
                'price'=>$product->price
            ];
        }
        return [];
    }
    
}