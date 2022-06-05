<?php

namespace App\Http\Controllers\admin\marka;

use App\Helper\imageUpload;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\Marka;
use Faker\Core\File;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = Marka::paginate(10);
        return view('admin.marka.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.marka.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);
        $insert = Marka::create($all);
        if ($insert) {
            return redirect()->back()->with('status', 'Marka Eklendi.');
        } else {
            return redirect()->back()->with('status', 'Marka Eklenemedi..');

        }
    }

    public function edit($id)
    {
        $c = Marka::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Marka::where('id', '=', $id)->get();
            return view('admin.marka.edit', ['data' => $data]);
        } else {
            return redirect('/');
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = Marka::where('id', '=', $id)->count();
        if ($c != 0) {
            $data = Marka::where('id', '=', $id)->get();
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            // $all['image'] = imageUpload::singleUploadUpdate(rand(1, 900), 'yazar', $request->file('image'), $data, 'image');
            $update = Marka::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Marka Başarıyla Düzenlendi.');
            } else {
                return redirect()->back()->with('status', 'Marka Düzenlenemedi..');

            }
        } else {
            return redirect('/');
        }
    }

    public function delete($id){
        $c = Marka::where('id', '=', $id)->count();
        if ($c != 0) {
            $w = Marka::where('id', '=', $id)->get();
            Marka::where('id','=',$id)->delete();
            return redirect()->back();
        }else{
            return redirect('/');
        }
    }

}





