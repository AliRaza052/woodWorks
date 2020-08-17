<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdContact;

class ContactController extends Controller
{
    public function contact()
    {
    	return view('frontend.contact');
    }


     public function savepost(Request $request){
    	$post=new AdContact();
    	
    	// $post->name=$request->name;
    	$post->email=$request->email;
        // $post->pno=$request->phone;
        $post->message=$request->message;
    // 	if($post->save()){
    //         $data=array('email'=>$post->email,'name'=>$post->name,'pno'=>$post->phone,'message'=>$post->message);
    //         Mail::send('/frontend/email/contactus',['data' => $data]
    //                     , function($message) use ($data)
    //                 {
    //                     $message->from($data['email']);
    //                     $message->to('info@tascoit.com', 'Admin')->subject('Tasco Contact Query');
    //                 }); 
    // 		return redirect()->back()->with('save','send message');
    //     }   	
    // }
}
}