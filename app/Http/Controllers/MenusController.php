<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {

        $menu = Menu::all();
        //$present = User::where([['role','!=',0],['role','!=',1]])->get();

        return view('menus.add')->with('menu',$menu);


    }

    public function add(Request $request)
    {
        $menu = new Menu;


        $menu->name=$request->name;
        $menu->type=$request->type;

        if($menu->save())
        {
            session()->flash('success','Menu Item  Created Successfully!');
            return redirect()->route('menu_create');
        }
    }
    public function edit(Request $request)
    {

        $user = Menu::find($request->id);

        $user->name=$request->name;
        $user->type=$request->type;


        if($user->save())
        {
            session()->flash('success','Menu item is updated!');
            return redirect()->route('menu_create');
        }


    }
    public function delete($id){
        $user = Menu::find($id);
        if($user->delete()){
            session()->flash('success','Item is delete');
            return redirect()->route('menu_create');
        }
    }


}
