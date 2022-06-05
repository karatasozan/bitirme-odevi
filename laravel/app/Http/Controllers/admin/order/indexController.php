<?php

namespace App\Http\Controllers\admin\order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\arabalar;
use File;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data=Order::paginate();
        return view('admin.order.index',['data'=>$data]);
    }
    public function detail($id){
        $c=Order::where('id','=',$id)->count();
        if($c!=0)
        {
            $w=Order::where('id','=',$id)->get();
            return view('admin.order.detail',['data'=>$w]);
        }
        else
        {
            return redirect('/');
        }
    }
    public function delete($id)
    {
        $c = Order::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Order::where('id', '=', $id)->get();
            File::delete('public/'.$data[0]['image']);
            Order::where('id','=',$id)->delete();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
