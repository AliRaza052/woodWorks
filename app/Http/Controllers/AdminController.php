<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
// use App\AdminLog;
// use App\Property;
use Hash;
use Validator;
use Session;
use Auth;
use Redirect;
use Carbon\Carbon;
use App\Agency;
// use App\SubscriptionPlans;
class AdminController extends Controller
{
    public function index(){

        return view('admin.login');
    }
    public function addUser(){
       
        return view('admin.user.add_user');
    }
    public function userProfile($id)
    {
        $user = User::where('id',$id)->get()->first();
        return view('admin.user.profile',compact('user'));
    }
    public function addNewUser(Request $request){
        {
            $rules=array(
                'name' => 'required|string',
                'email'=>'required|string|email|unique:users',
                'password'=>'required|string|min:6',
                'type'=>'required|string',
            );
            $messages=array(
                'name.required'=>'Please enter your name',
                'email.required'=>'Please enter your email',
                'email.unique'=>'This email is aready used',
                'password.required'=>'Please enter your password',
                'type.required'=>'Please Select User Type',
            );

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return back()->withInput()->with(['errors' => $validator->errors()]);
            }
            else{

                    $user=User::create([
                        'name' => $request->name,
                        'email' => $request->email,
                        'password' => Hash::make($request->password),
                        'type'=> $request->type,
                    ]);
                }
               return redirect()->route('list_users')->with('added_user','User Added Successfully');
            }

        }
    
    public function editUser($id)
    {
            $user = User::where('id',$id)->get()->first();
            return view('admin.user.edituser',compact('user'));
    }
    public function updateUser(Request $request,$id)
    {
        $get_validity = SubscriptionPlans::where('id',$request->subscription_plan)->get(['validity'])->first();
        if($get_validity->validity == 'monthly'){
            $current_date =Carbon::now();
            $start_date = Carbon::now();
            $end_date = $start_date->addMonths(1);

        }
        if($get_validity->validity == 'annually'){
            $current_date =Carbon::now();
            $start_date = Carbon::now();
            $end_date = $start_date->addYears(1);
        }
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if(!empty($user->password))
        {
            $user->password = Hash::make($request->password);
        }
        $user->phone = $request->phone;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->type = $request->type;
        $user->subscription_plan = $request->subscription_plan;
        $user->start_date = $current_date;
        $user->exp_date= $end_date;
        if(!empty($request->image))
            {
                $destinationPath =public_path().'/assets/user/images';
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
                }
                $filename  = time().$request->image->getClientOriginalName();
                $request->image->move($destinationPath, $filename);
                $user->image = $filename;
            }
            $user->save();
            return redirect()->route('allusers')->with('updated_user','User has been Successfully Updated');

    }
    public function editAdmin($id){
            $admin = User::where('type','admin')->where('id',$id)->get()->first();
            // dd($admin);
            return view('admin.edit_account',compact('admin'));
    }
    public function dashboard(){
        // $total_properties = Property::all()->count();
        // $pending_properties = Property::where('is_accepted','0')->count();
        // $approved_properties = Property::where('is_accepted','1')->count();
        // $total_users = User::where('type','!=','admin')->where('status',1)->count();
        // $admin = User::where('type','admin')->get()->first();

        // Session::put("admin_id",$admin->id);
        // Session::put("admin_email",$admin->email);
        // Session::put("admin_name",$admin->name);
        // Session::put("admin_image",$admin->image);
        // return view('admin.dashboard',compact('admin','total_properties','pending_properties','pending_properties','total_users'));
        return view('admin.dashboard');
    }
    public function updateAdmin(Request $request)
    {
        $admin = User::find($request->id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        if($request->input('password'))
        {
            $admin->password = Hash::make($request->input('password'));
        }
         $this->validate($request, [
            'image' => 'required',
            'image.*' => 'mimes:png,jpg,jpeg',
        ]);

        if($request->hasfile('image'))
        {
            $image_filename = time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/Profile', $image_filename);
        }

        $admin->image = $image_filename;

         if($admin->save())
        {
            $username = Auth::user()->name;
            $log = new AdminLog();
            $log->user_id = Auth::user()->id;
            $log->user_name = $username;
            $log->task_performed = "Admin updated his/her Profile";
            $log->save();
        }

        return redirect()->back()->with('success','Profile Updated Succesfully');
    }
    public  function adminlogin(Request $request){
        $rules = [
            'email'=>['required','string'],
            'password'=>['required','string'],
            ];
            $messages = array(
                'email.required'=>'Please enter your email',
                'password.required' => 'Please enter your password',
            );
             $validator = Validator::make($request->all(), $rules, $messages);
            if($validator->fails()){
                return back()
                ->withErrors($validator)
                ->withInput();
            }else {
                $data = User::where([['email', '=', $request->email], ['type', '=', 'admin']])->first();
                if ($data) {

                    if (\Hash::check($request->password, $data->password)) {

                        Auth::attempt(['email' => $request->email, 'password' => $request->password]);
                        return redirect('/admin/dashboard');
                    } else {
                        Session::flash('login_feedback', 'Invalid User.');
                        return back()->withErrors($validator)->withInput();
                    }
                } else {
                    Session::flash('login_feedback', 'Provided credentials are incorrect. Please try again');
                    return back()->withErrors($validator)->withInput();
                }
            }

        }

        public function users(){
            $users = User::where('type','!=','super_admin')->get();
            return view('admin.user.users',compact('users'));
        }

        public function deleteuser($id){
            $del=User::find($id);
            $del->delete();
            
            

            return redirect()->back()->with('delete_user','User Has been removed by admin');
       }

        

        public function logout(){
            if(Auth::check()){
                if(Auth::user()->type=="admin"){
                    Auth::logout();
            Session::flush();
            return Redirect::to('/admin/login');
                }

        }
    }
}
