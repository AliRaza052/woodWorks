<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
    	$sliders = slider::all();

        return view('admin.slider.slider',compact('sliders'));

    }
    public function addSlider()
    {
        return view('admin.slider.add_slider');

    }

    public function addslidertype(Request $request)
    {
      $product_type=new slider();
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
    public function editsliderType($id)
    {
    	$product_types = slider::findorFail($id);
    	return view('admin.slider.edit_slider',compact('product_types'));
    }
    public function updatesliderType(Request $request, $id)
    {
      $product_type= slider::find($id);

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

    public function deleteslider($id){
        $del=slider::find($id);
        $del->delete();
        return redirect()->back()->with('delete_user','User Has been removed by admin');
   }
}



