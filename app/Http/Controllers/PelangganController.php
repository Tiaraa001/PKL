<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.create');
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
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'alamat' => 'required'
        // ]);

        $pelanggan = new Pelanggan;
        $pelanggan->nama = $request->nama;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->email = $request->email;
        $pelanggan->save();
        return redirect()->route('pelanggan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->nama = $request->nama;
        $pelanggan->jenis_kelamin = $request->jenis_kelamin;
        $pelanggan->alamat = $request->alamat;
        $pelanggan->email = $request->email;
        $pelanggan->save();
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggan = pelanggan::findOrFail($id);
        $pelanggan->delete();
        return redirect()->route('pelanggan.index');
    }
}
