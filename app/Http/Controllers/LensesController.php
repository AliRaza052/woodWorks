<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lenses;
use App\Products;

class LensesController extends Controller
{
   public function index()
    {
    	$lenses = Lenses::all();

        return view('admin.lenses.lenses',compact('lenses'));

    }
    public function addLense()
    {
    	$products = Products::all();
        return view('admin.lenses.add_lense',compact('products'));
    }
    public function postLense(Request $request)
    {
      $lense=new Lenses();
      $lense->name=$request->name;
      $lense->description=$request->description;
      $lense->type=$request->type;
      $lense->product_id=$request->product_id;
      
     if($lense->save()){
        return redirect()->back()->with('success','Lense added Successfully');
     }else{
        return redirect()->back()->with('error','Error in adding Lense');
     }
    }
    public function editlens($id)
    {
    	$lense = Lenses::findorFail($id);
    	$products = Products::all();
    	return view('admin.lenses.edit_lense',compact('lense','products'));
    }
    public function updateLense(Request $request,$id)
    {
      $lense=Lenses::findorFail($id);
      $lense->name=$request->name;
      $lense->description=$request->description;
      $lense->type=$request->type;
      $lense->product_id=$request->product_id;
      
     if($lense->save()){
        return redirect()->back()->with('success','Lense updated Successfully');
     }else{
        return redirect()->back()->with('error','Error in updating Lense');
     }
    }
    public function deleteLense($id)
    {
    	$lense = Lenses::findorFail($id);
    	$lense->delete();
    	return redirect()->back()->with('deleted','Lense Deleted Successfully');
    }
}
