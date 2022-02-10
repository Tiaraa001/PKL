<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $transaksi = transaksi::with('produk')->get();
        // return view('transaksi.index', compact ('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $transaksi = transaksi::all();
        // $produk = produk::all();
        // return view ('transaksi.create', compact ('transaksi','produk')) ;   
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
        // $request->validate([
        //     'nama_barang' => 'required',
        //     'suplier_id' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
            
        // ]);

        // $transaksi = new transaksi;
        // $transaksi->nama = $request->nama;
        // $transaksi->produk_id = $request->produk_id;
        // $transaksi->qty = $request->qty;
        // $transaksi->harga = $request->harga;
        // $transaksi->total = 0;
        // $transaksi->save();

        // <!-- id: 5 ; produk_id : 10-->
        // return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
