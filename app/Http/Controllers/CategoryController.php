<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoryController extends Controller
{
   public function category()
    {
    	$categorys = Category::all();

        return view('admin.category',compact('categorys'));

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
    public function editproductcategory($id)
    {
    	$product = Category::findorFail($id);
    	return view('admin.editproductcategory',compact('product'));
    }
    public function updateproduct(Request $request, $id)
    {
      $product= Category::find($id);
      
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
    public function deleteCategory($id)
    {
      $category = Category::where('id',$id)->get()->first();
      $category->delete();
      return redirect()->back()->with('delete_category','Category deleteed Successfully');
    }
}
