<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gurucontroller extends Controller
{
    public function index()
    {
        $guru = DB::table('guru')->get();

        return view('guru.index', ['guru' => $guru]);
    }
    public function create(Request $request)
    {
        \App\guru::create($request->all());
        return redirect('/guru')->with('sukses','data berhasil di input');
    }
    public function edit($id)
    {
        $guru = \App\guru::find($id);
        return view('guru.edit',['guru' => $guru]);
    }
    public function update(Request $request,$id)
    {
        //dd($request->all());
        $guru = \App\guru::find($id);
        $guru->update($request->all());
        return redirect('/guru')->with('sukses', 'data berhasil di update');
    }
    public function delete($id)
    {
        $guru = \App\guru::find($id);
        $guru->delete($guru);
        return redirect('/guru')->with('sukses', 'data berhasil di hapus');
    }
}
