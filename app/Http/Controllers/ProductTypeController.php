<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
    	$types = ProductType::all();
    	

        return view('admin.product_types.product_types',compact('types'));

    }
    public function addType()
    {
        return view('admin.product_types.add_type');

    }

    public function addproductType(Request $request)
    {
      $product_type=new ProductType();
      $product_type->name=$request->name;
      $product_type->description=$request->description;
      $images = $request->image;
      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/product_types/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product_type->image=json_encode($images);
    }
     if($product_type->save()){
        return redirect()->back()->with('success','Product Type added Successfully');
     }else{
        return redirect()->back()->with('error','Error in adding Product Type');
     }
    }
    public function editproductType($id)
    {
    	$product_types = ProductType::findorFail($id);
    	return view('admin.product_types.editproducttype',compact('product_types'));
    }
    public function updateproductType(Request $request, $id)
    {
      $product_type= ProductType::find($id);

      $product_type->name=$request->name;
      $product_type->description=$request->description;

      $images = $request->image;

      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/product_types/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product_type->image=json_encode($images);
    }
     if($product_type->save()){
        return redirect()->back()->with('success','Product Type Updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in Updating Product Type');
     }
    }

    public function deleteType($id){
        $del=ProductType::find($id);
        $del->delete();
        return redirect()->back()->with('delete_user','User Has been removed by admin');
   }
}
