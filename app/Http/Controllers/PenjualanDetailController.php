<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\penjualanDetail;
use App\Models\produk;
use Illuminate\Http\Request;

class PenjualanDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualanDetail = penjualanDetail::with('penjualan')->get();
        return view('penjualanDetail.index', compact('penjualanDetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualanDetail = penjualanDetail::all();
        $penjualan = penjualan::all();
        $produk = produk::all();
        return view('penjualanDetail.create', compact('penjualanDetail', 'penjualan', 'produk'));
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
        //  $request->validate([
        //     'penjualan_id' => 'required',
        //     'produk_id' => 'required',
        //     'kualitas' => 'required',
        //     'qty' => 'required',
        //     'tanggal' => 'required',
        //     'harga' => 'required',

        // ]);

        $penjualanDetail = new penjualanDetail;
        $penjualanDetail->penjualan_id = $request->penjualan_id;
        $penjualanDetail->produk_id = $request->produk_id;
        $penjualanDetail->kualitas = $request->kualitas;
        $penjualanDetail->qty = $request->qty;
        $penjualanDetail->tanggal = $request->tanggal;
        $penjualanDetail->harga = $request->harga;
        $penjualanDetail->save();
        return redirect()->route('penjualanDetail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $penjualanDetail = penjualanDetail::findOrFail($id);
        $penjualan = penjualan::all();
        $produk = produk::all();
        return view('penjualanDetail.show', compact('penjualanDetail', 'penjualan', 'produk'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualanDetail = penjualanDetail::findOrFail($id);
        $penjualan = penjualan::all();
        $produk = produk::all();
        return view('penjualanDetail.edit', compact('penjualanDetail', 'penjualan', 'produk'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penjualanDetail  $penjualanDetail
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

        $penjualanDetail = new penjualanDetail;
        $penjualanDetail->penjualan_id = $request->penjualan_id;
        $penjualanDetail->produk_id = $request->produk_id;
        $penjualanDetail->kualitas = $request->kualitas;
        $penjualanDetail->qty = $request->qty;
        $penjualanDetail->tanggal = $request->tanggal;
        $penjualanDetail->harga = $request->harga;
        $penjualanDetail->save();
        return redirect()->route('penjualanDetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penjualanDetail  $penjualanDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualanDetail = penjualanDetail::findOrFail($id);
        $penjualanDetail->delete();
        return redirect()->route('penjualanDetail.index');
    }
}
