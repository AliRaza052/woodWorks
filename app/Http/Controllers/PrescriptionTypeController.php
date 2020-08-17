<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lenses;
use App\PrescriptionType;
// use App\Products;

class PrescriptionTypeController extends Controller
{
   public function index()
    {
    	$prescription = PrescriptionType::all();

        return view('admin.prescription.prescription',compact('prescription'));

    }
    public function addLense()
    {
    	$lenses = Lenses::all();
        return view('admin.prescription.add_prescription',compact('lenses'));
    }
    public function postLense(Request $request)
    {
      $lensemet=new PrescriptionType();
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
    	$lensemet = PrescriptionType::findorFail($id);
    	$lenses = Lenses::all();
    	return view('admin.prescription.edit_prescription',compact('lensemet','lenses'));
    }
    public function updateLense(Request $request,$id)
    {
      $lensemet=PrescriptionType::findorFail($id);
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
    	$lense = PrescriptionType::findorFail($id);
    	$lense->delete();
    	return redirect()->back()->with('deleted','Lense Deleted Successfully');
    }
}
