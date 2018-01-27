<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wajib_pajak;

class WajibPajakController extends Controller
{
    public function index()
    {
        $wajib_pajaks = Wajib_pajak::all();
    	return view('Pajak.wajibpajak', compact('wajib_pajaks'));

    }

     public function create()
    {
    	return view('Pajak.inputdata');
    	
    }

    public function store()
    {
    	Wajib_pajak::create([
    		'nomor_objek_pajak' => request('nomor_objek_pajak'),
            'nama_wajib_pajak' => request('nama_wajib_pajak'),
            'alamat_objek_pajak' => request('alamat_objek_pajak'),
            'alamat_wajib_pajak' => request('alamat_wajib_pajak'),
    		]);
        return redirect()->route('wajibpajak.index');
    }
    public function edit($id)
    {
        $wajib_pajak = wajib_pajak::find($id);
        return view('Pajak.editData',compact('wajib_pajak'));
    }

    public function update(Wajib_pajak $wajib_pajak)
    {
        $wajib_pajak->update([
         'nomor_objek_pajak' => request('nomor_objek_pajak'),
            'nama_wajib_pajak' => request('nama_wajib_pajak'),
            'alamat_objek_pajak' => request('alamat_objek_pajak'),
            'alamat_wajib_pajak' => request('alamat_wajib_pajak'),
            ]);   
        return redirect()->route('wajibpajak.index');
    }   
    public function destroy(Wajib_pajak $wajib_pajak)
    {
        $wajib_pajak->delete();
        return redirect()->route('wajibpajak.index');
    }
}

