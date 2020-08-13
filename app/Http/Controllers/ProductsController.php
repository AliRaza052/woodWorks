<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use Auth;
use Image;

class ProductsController extends Controller
{
  public function productListing()
  {
    $products = Products::all();
    return view('admin.properties.products_listing',compact('products'));
  }
    public function newproduct()
    {
        return view('admin.properties.addproduct');

    }
    public function editProduct($id){
        $product = Products::where('id',$id)->get()->first();
        return view('admin.properties.edit_product',compact('product'));
    }

     public function addproperty(Request $request)
    {
      $product=new Products();
      $product->user_id=1;
      // Auth::user()->id;
    // $product->user_id='2';
      $product->name=$request->name;
      $product->color=$request->color;
      $product->type=$request->type;
      $product->description=$request->description;
      $product->style=$request->style;
      $product->frame_metrial=$request->frame_metrial;
      $product->lens_metrial=$request->lens_metrial;
      $product->case_type= $request->case_type;
      $product->category=$request->category;
      $product->price=$request->price;
      $images = $request->image;
      $description_images =  $request->description_image;
      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/product_images/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product->image=json_encode($images);
    }
         if($files=$request->file('description_image')){
        $destinationPath =public_path().'/assets/product/images/description_images/';
        foreach($files as $file){
            $desc_name=$file->getClientOriginalName();
            $file->move($destinationPath,$desc_name);
            $product_images[]=$desc_name;
        }
        $product->description_image=json_encode($product_images);
    }
     if($product->save()){
        return redirect()->back()->with('success','product Updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in Updating product');
     }
    }

    public function updateproduct(Request $request, $id)
    {
      $product= Products::find($id);
      // $product->user_id=Auth::user()->id;
    // $product->user_id='2';
      $product->name=$request->name;
      $product->color=$request->color;
      $product->type=$request->type;
      $product->description=$request->description;
      $product->style=$request->style;
      $product->frame_metrial=$request->frame_metrial;
      $product->lens_metrial=$request->lens_metrial;
      $product->case_type= $request->case_type;
      $product->category=$request->category;
      $product->price=$request->price;
      $images = $request->image;
      $description_images =  $request->description_image;
      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/product_images/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product->image=json_encode($images);
    }
         if($files=$request->file('description_image')){
        $destinationPath =public_path().'/assets/product/images/description_images/';
        foreach($files as $file){
            $desc_name=$file->getClientOriginalName();
            $file->move($destinationPath,$desc_name);
            $product_images[]=$desc_name;
        }
        $product->description_image=json_encode($product_images);
    }
     if($product->save()){
        return redirect()->back()->with('success','product Updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in Updating product');
     }
    }

    public function deleteProduct($id)
    {
      $product = Products::findorFail($id);
      if ($product) {
        $product->delete();
        return redirect()->back()->with('deleted','Product Deleted Successfully');
      }
      else
      {
        return redirect()->back()->with('deleted','Failure in Product Deletion');
      }
    }
}
