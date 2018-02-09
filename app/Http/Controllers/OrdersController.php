<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Menu;
use App\Order;
use App\OrderItem;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {

        $order = Order::lists('id','name');
        //$present = User::where([['role','!=',0],['role','!=',1]])->get();

        return view('orders.index')->with('order',$order);


    }
    public function add_view()
    {

        $present = Menu::all();
       //dd($present);
        return view('orders.add')->with('menu',$present);

    }
    public function add(Request $request)
    {
        $user = Customer::where([['name','=',$request->name],['email','=',$request->email],['phone','=',$request->phone]])->first();
        if (!empty($user)){
            $response = array(
                'status' => 'allready',
                'msg' => 'place order',
                'cust_id' => $user->id,
            );
        }
        else{
            $user = new Customer;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->dob=$request->dob;
            $user->address=$request->address;
            if($user->save())
            {
                $response = array(
                    'status' => 'success',
                    'msg' => 'Add user Now You can Place order ',
                    'cust_id' =>   $user->id,
                );

            }
          /*  $article = new Customer($request->all());
            Auth::user()->Customer()->save($article);*/


        }

        return \Response::json($response);


    }
    public function previous(Request $request)
    {
        if (!empty($request->custid)){
            $user = Order::where([['customer_id','=',$request->custid]])->get();
            return Response::json($user);
        }
        else
        {
            return \Response::json('No Data Available');
        }



    }
}
