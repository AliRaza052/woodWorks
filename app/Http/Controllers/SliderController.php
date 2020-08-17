<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;
use App\Products;

class SliderController extends Controller
{
    public function index()
    {
    	$sliders = slider::all();

        return view('admin.slider.slider',compact('sliders'));

    }
    public function addSlider()
    {
    	$products= Products::all();

        return view('admin.slider.add_slider',compact('products'));

    }
    public function getProductDetails(Request $request)
    {
    	$product = Products::findorFail($request->productid)->get()->first();
    	$data = ['success'=>true,'product_category'=>$product->category,'type'=>$product->type];
    	return $data;
    }

    public function addslidertype(Request $request)
    {
      $product_type=new slider();
      $product_type->name=$request->name;
      $product_type->description=$request->description;
      $product_type->product_id=$request->product_id;
      $product_type->category=$request->category;
      $product_type->product_type=$request->type;
      $images = $request->image;
      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/Slider/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product_type->image=json_encode($images);
    }
     if($product_type->save()){
        return redirect()->back()->with('success','Slider added Successfully');
     }else{
        return redirect()->back()->with('error','Error in adding Slider');
     }
    }
    public function editsliderType($id)
    {
    	$product_types = slider::findorFail($id);
    	$products = Products::all();
    	return view('admin.slider.edit_slider',compact('product_types','products'));
    }
    public function updatesliderType(Request $request, $id)
    {
      $product_type= slider::find($id);

      $product_type->name=$request->name;
      $product_type->description=$request->description;
      $product_type->product_id=$request->product_id;
      $product_type->category=$request->category;
      $product_type->product_type=$request->type;

      $images = $request->image;

      if($files=$request->file('image')){
        $destinationPath =public_path().'/assets/product/images/Slider/';
        foreach($files as $file){
            $name=$file->getClientOriginalName();
            $file->move($destinationPath,$name);
            $images[]=$name;
        }
        $product_type->image=json_encode($images);
    }
     if($product_type->save()){
        return redirect()->back()->with('success','Slider Updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in Updating Slider');
     }
    }

    public function deleteslider($id){
        $del=slider::find($id);
        $del->delete();
        return redirect()->back()->with('delete_user','Slider has been removed by admin');
   }
}



