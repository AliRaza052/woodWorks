<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
use Auth;
use Image;

class ProductsController extends Controller
{
    public function newproduct()
    {
        return view('admin.properties.addproduct');

    }
    public function editPropety($id){
        $product = Products::where('id',$id)->get()->first();
        return view('admin.properties.edit_property',compact('product'));
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
      if(!empty($images)){
            if($request->hasfile('image'))
            {
                foreach($request->file('image') as $image)
                {
                    $destinationPath =public_path().'/assets/product/images/product_images/';
                    if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                    }
                    $filename= time().$image->getClientOriginalName();
                    $image->move($destinationPath, $filename);
                  
                    $images_data[] = $filename;
                }
                $product->image=json_encode($images_data);
            }
        }
        if(!empty($description_images)){
            if($request->hasfile('description_image'))
            {
                foreach($request->file('description_image') as $description_image)
                {
                    $destinationPath =public_path().'/assets/product/images/description_images/';
                    if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                    }
                    $desc_filename= time().$image->getClientOriginalName();
                    $image->move($destinationPath, $desc_filename);
                  
                    $des_images_data[] = $desc_filename;
                }
                $product->description_image=json_encode($des_images_data);
            }
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
      $product->user_id=Auth::user()->id;
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
      if(!empty($images)){
            if($request->hasfile('image'))
            {
                foreach($request->file('image') as $image)
                {
                    $destinationPath =public_path().'/assets/product/media/images/';
                    if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                    }
                    $filename= time().$image->getClientOriginalName();
                    $image->move($destinationPath, $filename);
                    $img = Image::make($destinationPath.$filename);
                   
                    $img->resize(615,615);
                    if (!file_exists($destinationPath.'thumb/')) {
                        mkdir($destinationPath.'thumb/', 0777, true);
                    }
                    //   $thumbimage=$destinationPath.'thumb/'.$filename;
                    $img->save($destinationPath.'/thumb/'.$filename);

                    $images_data[] = $filename;
                }
                $product->image=json_encode($images_data);
            }
        }
        if(!empty($description_images)){
            if($request->hasfile('description_image'))
            {
                foreach($request->file('description_image') as $description_image)
                {
                    $destinationPath =public_path().'/assets/product/media/images/description_images/';
                    if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                    }
                    $desc_filename= time().$image->getClientOriginalName();
                    $image->move($destinationPath, $desc_filename);
                    $img = Image::make($destinationPath.$desc_filename);

                    $img->resize(615,615);
                    if (!file_exists($destinationPath.'thumb/')) {
                        mkdir($destinationPath.'thumb/', 0777, true);
                    }
                    //   $thumbimage=$destinationPath.'thumb/'.$filename;
                    $img->save($destinationPath.'/thumb/'.$desc_filename);

                    $des_images_data[] = $desc_filename;
                }
                $product->description_image=json_encode($des_images_data);
            }
        }
     if($product->save()){
        return redirect()->back()->with('success','product Updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in Updating product');
     }
    }
}
