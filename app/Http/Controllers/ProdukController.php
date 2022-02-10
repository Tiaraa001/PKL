<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\suplier;


use DB;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::with('suplier')->get();
        return view('produk.index', compact ('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = produk::all();
        $suplier = suplier::all();
        return view ('produk.create', compact ('produk','suplier')) ;
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

        $produk = new produk;
        $produk->nama_barang = $request->nama_barang;
        $produk->suplier_id = $request->suplier_id;
           // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/barang/', $name);
            $produk->cover = $name;
        }
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();
        return redirect()->route('produk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = produk::findOrFail($id);
        $suplier = suplier::all();
        return view('produk.show', compact('produk', 'suplier'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::findOrFail($id);
        $suplier = suplier::all();
        return view('produk.edit', compact('produk', 'suplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  $request->validate([
        //     'nama' => 'required',
        //     'suplier_id' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        // ]);

        $produk = produk::findOrFail($id);
        $produk->nama_barang = $request->nama_barang;
        $produk->suplier_id = $request->suplier_id;
         // upload image / foto
        if ($request->hasFile('cover')) {
            $barang->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/barang/', $name);
            $barang->cover = $name;
        }
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
         $barang->deleteImage();        
        $produk->delete();
        return redirect()->route('produk.index');

    }
}
