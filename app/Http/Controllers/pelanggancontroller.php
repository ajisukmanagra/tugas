<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pelanggancontroller extends Controller
{
    public function index()
    {
        $pelanggan = DB::table('pelanggan')->get();

        return view('pelanggan.index', ['pelanggan' => $pelanggan]);
    }
    public function create(Request $request)
    {
        \App\pelanggan::create($request->all());
        return redirect('/pelanggan')->with('sukses','data berhasil di input');
    }
    public function edit($id)
    {
        $pelanggan = \App\pelanggan::find($id);
        return view('pelanggan.edit',['pelanggan' => $pelanggan]);
    }
    public function update(Request $request,$id)
    {
        //dd($request->all());
        $pelanggan = \App\pelanggan::find($id);
        $pelanggan->update($request->all());
        return redirect('/pelanggan')->with('sukses', 'data berhasil di update');
    }
    public function delete($id)
    {
        $pelanggan = \App\pelanggan::find($id);
        $pelanggan->delete($pelanggan);
        return redirect('/pelanggan')->with('sukses', 'data berhasil di hapus');
    }
}
