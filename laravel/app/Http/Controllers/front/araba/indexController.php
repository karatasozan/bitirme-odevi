<?php

namespace App\Http\Controllers\front\araba;

use App\Http\Controllers\Controller;
use App\Models\arabalar;
use App\Models\Telefon;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($selflink)
    {
        $c=arabalar::where('selflink','=',$selflink)->count();
        if($c!=0){
            $w=arabalar::where('selflink','=',$selflink)->get(); //bilgilerini alıyoruz

            return view('front.araba.index',['data'=>$w]);
        }else{
            return redirect('/');
        }

    }
}
