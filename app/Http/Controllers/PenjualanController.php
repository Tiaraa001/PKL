<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\produk;
use App\Models\pelanggan;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = penjualan::with('produk')->get();
        return view('penjualan.index', compact ('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = penjualan::all();
        $produk = produk::all();
        $pelanggan = pelanggan::all();
        return view ('penjualan.create', compact ('penjualan','produk', 'pelanggan')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validasi data
         $request->validate([
            'nama' => 'required',
            'pelanggan_id' => 'required',
            'produk_id' => 'required',
            'harga' => 'required',
            'qty' => 'required',

        ]);

        $penjualan = new penjualan;
        $penjualan->nama = $request->nama;
        $penjualan->pelanggan_id = $request->pelanggan_id;
        $penjualan->produk_id = $request->produk_id;
        $penjualan->harga = $request->harga;
        $penjualan->qty = $request->qty;
        $penjualan->save();
        return redirect()->route('penjualan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = penjualan::findOrFail($id);
        $produk = produk::all();
        $pelanggan = pelanggan::all();
        return view('penjualan.show', compact('penjualan', 'produk', 'pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = penjualan::findOrFail($id);
        $produk = produk::all();
        $pelanggan = pelanggan::all();
        return view('penjualan.edit', compact('penjualan', 'produk', 'pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validasi data
        //  $request->validate([
        //     'nama' => 'required',
        //     'suplier_id' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        // ]);

        $penjualan = penjualan::findOrFail($id);
        $penjualan->pelanggan_id = $request->pelanggan_id;
        $penjualan->produk_id = $request->produk_id;
        $penjualan->harga = $request->harga;
        $penjualan->qty = $request->qty;
        $penjualan->save();
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjualan  $penjualan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = penjualan::findOrFail($id);
        $penjualan->delete();
        return redirect()->route('penjualan.index');

    }
}
