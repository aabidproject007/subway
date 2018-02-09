<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function index()
    {

        $present = User::all();
        //$present = User::where([['role','!=',0],['role','!=',1]])->get();

        return view('users.index')->with('user',$present);


    }

    public function add(Request $request)
    {

        $present = User::where('email','=',$request->email)->first();

        if(!empty($present)){
            session()->flash('danger','User is exist!');
            return redirect()->route('admin_create');
        }

        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password) ;
        $user->gender=$request->gender;
        $user->role=$request->role;
        if($user->save())
        {
            session()->flash('success','User Created Successfully!');
            return redirect()->route('admin_create');
        }
    }

    public function edit_view($id)
    {

        $present = User::find($id);
        return view('users.edit_view')->with('user',$present);

    }

    public function edit(Request $request)
    {

        $user = User::find($request->id);

        $user->name=$request->name;
        $user->email=$request->email;
        $user->gender=$request->gender;
        $user->role=$request->role;

        if($user->save())
        {
            session()->flash('success','User is updated!');
            return redirect()->route('admin_users_list');
        }


    }

    public function edit_staus($id,$status){
        $user = User::find($id);

        $user->status = $status;

        if($user->save()){
            session()->flash('success','User is updated!');
            return redirect()->route('admin_users_list');
        }
    }

    public function login(Request $request)
    {
         if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
         {
             session()->flash('success','Wel come!');
             return redirect()->route('home');
         }
         else{
             session()->flash('danger','Innceorect user name and Password');
             return redirect()->route('login');
         }

    }
}
