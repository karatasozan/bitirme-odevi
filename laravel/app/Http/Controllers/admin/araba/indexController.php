<?php

namespace App\Http\Controllers\admin\araba;

use App\Http\Controllers\Controller;
use App\Helper\imageUpload;
use App\Helper\mHelper;

use App\Models\Kategoriler;
use App\Models\Marka;
use App\Models\satici;
use App\Models\arabalar;
use File;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = arabalar::paginate(10); //Araba->Model İsmi
        return view('admin.araba.index', ['data' => $data]);
    }

    public function create()
    {
        $marka = Marka::all();
        $satici = satici::all();
        $kategori=Kategoriler::all();
        return view('admin.araba.create', ['marka' => $marka, 'satici' => $satici,'kategori'=>$kategori]);
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "araba", $request->file('image'));

        $insert = arabalar::create($all);
        if ($insert) {
            return redirect()->back()->with('status', 'Araba Eklendi.');


        } else {
            return redirect()->back()->with('status', 'Araba Ekleme Başarısız..');
        }
    }

    public function edit($id)
    {


        $c = arabalar::where('id', '=', $id)->count();
        if ($c != 0) {
            $marka = Marka::all();
            $satici = satici::all();
            $kategori=Kategoriler::all();
            $data = arabalar::where('id', '=', $id)->get();
            return view('admin.araba.edit', ['data' => $data, 'marka' => $marka, 'satici' => $satici,'kategori'=>$kategori]);

        } else {
            return redirect('/');
        }

    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = arabalar::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = arabalar::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $all['image'] = imageUpload::singleUploadUpdate(rand(1, 9000), 'araba', $request->file('image'), $data, 'image');

            $update = arabalar::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Arabalar Düzenlendi.');

            } else {
                return redirect()->back()->with('status', 'Arabalar Düzenlenemedi.');

            }

        } else {
            return redirect('/');
        }
    }

    public function delete($id)
    {
        $c = arabalar::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = arabalar::where('id', '=', $id)->get();
            File::delete('public/'.$data[0]['image']);
            arabalar::where('id','=',$id)->delete();
            return redirect('/');
        }else{
            return redirect('/');
        }
    }
}
