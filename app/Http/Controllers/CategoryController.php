<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoryController extends Controller
{
   public function category()
    {
        return view('admin.category');

    }
    public function addcategory()
    {
        return view('admin.addcategory');

    }

    public function addproductcategory(Request $request)
    {
      $product=new Category();
      $product->name=$request->name;
      $product->description=$request->description;
      $images = $request->image;
      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/product_images/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product->image=json_encode($images);
    }
     if($product->save()){
        return redirect()->back()->with('success','product Updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in Updating product');
     }
    }
}
