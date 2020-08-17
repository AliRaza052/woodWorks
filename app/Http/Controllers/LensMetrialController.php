<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lenses;
use App\LensMetrial;
// use App\Products;

class LensMetrialController extends Controller
{
   public function index()
    {
    	$lensesmetrial = LensMetrial::all();

        return view('admin.lenses_metrial.lensesmetrial',compact('lensesmetrial'));

    }
    public function addLense()
    {
    	$lenses = Lenses::all();
        return view('admin.lenses_metrial.add_lensmetrial',compact('lenses'));
    }
    public function postLense(Request $request)
    {
      $lensemet=new LensMetrial();
      $lensemet->name=$request->name;
      $lensemet->description=$request->description;
      $lensemet->price=$request->price;
      $lensemet->lens_id=$request->lens_id;
      
     if($lensemet->save()){
        return redirect()->back()->with('success','Lense added Successfully');
     }else{
        return redirect()->back()->with('error','Error in adding Lense');
     }
    }
    public function editlens($id)
    {
    	$lensemet = LensMetrial::findorFail($id);
    	$lenses = Lenses::all();
    	return view('admin.lenses_metrial.edit_lensmetrial',compact('lensemet','lenses'));
    }
    public function updateLense(Request $request,$id)
    {
      $lensemet=LensMetrial::findorFail($id);
      $lensemet->name=$request->name;
      $lensemet->description=$request->description;
      $lensemet->price=$request->price;
      $lensemet->lens_id=$request->lens_id;
      
     if($lensemet->save()){
        return redirect()->back()->with('success','Lense updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in updating Lense');
     }
    }
    public function deleteLense($id)
    {
    	$lense = LensMetrial::findorFail($id);
    	$lense->delete();
    	return redirect()->back()->with('deleted','Lense Deleted Successfully');
    }
}
