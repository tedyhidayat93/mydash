<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermintaanbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.permintaan-barang.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
	 // HOMEWORK
    public function create($jenispermintaan)
    {
        if($jenispermintaan == 'inventaris')
		{
			$judul = 'Permintaan Barang Inventaris';
		}
		elseif($jenispermintaan == 'bhp')
		{
			$judul = 'Permintaan Barang Barang Habis Pakai';
		}
		elseif($jenispermintaan == 'sukucadang')
		{
			$judul = 'Permintaan Barang Suku Cadang';
		}
		else
		{
			return redirect()->back()->with('error', 'Url yang anda cari tidak ada');
		}
		
		return view('pages.permintaan-barang.form', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('permintaan_barang.simlog')->with('success', 'Permintaan Barang berhasil diajukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		return view('pages.permintaan-barang.detail', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
