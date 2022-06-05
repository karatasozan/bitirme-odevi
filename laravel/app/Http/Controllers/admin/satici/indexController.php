<?php

namespace App\Http\Controllers\admin\satici;
use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\satici;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = satici::paginate(10);//sayfada 10 tane gösterilmesini istiyoruz
        return view('admin.satici.index', ['data' => $data]);
    }
    public function create()
    {
        return view('admin.satici.create');
    }
    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = satici::create($all);
        if ($insert) {
            return redirect()->back()->with('status', 'Satıcı Başarıyla Eklendi.');
        } else {
            return redirect()->back()->with('status', 'Satıcı Eklenemedi..');

        }
    }

    public function edit($id)
    {
        $data = satici::where('id', '=', $id)->get();
        return view('admin.satici.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $c = satici::where('id', '=', $id)->count();
        if ($c != 0) {
            $all = $request->except('_token');
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = satici::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with('status', 'Satıcı Düzenlendi.');
            } else {
                return redirect()->back()->with('status', 'Satıcı Düzenlenemedi..');

            }
        }
    }
    public function delete($id)
    {
        $c = satici::where('id', '=', $id)->count();
        if ($c != 0) {
            $delete = satici::where('id', '=', $id)->delete();
            return redirect()->back();
        } else {
            return redirect()->back()->with('status', 'Satıcı Silinemedi..');

        }
    }
}
