<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\suplier;

class ApiController extends Controller
{
    public function index(){

        $suplier = suplier::all();
        // ubah ke json
       return response()->json([
        'success' => true,
        'message' => 'list Data Suplier',
        'data' => $suplier
        ], 200);

    }

     public function create()
    {
        // return view('suplier.create');
    }

    public function store(Request $request){

        // validasi data
        $validated = $request->validate([
        'nama' => 'required',
        'alamat' => 'required'
        ]);

        $suplier = new Suplier;
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();

        // ubah ke json
        return response()->json([
        'success' => true,
        'message' => 'list Tambah Suplier',
        'data' => $suplier,
        ], 200);
    }

     public function show($id)
    {
        $suplier = suplier::findOrFail($id);
        // ubah ke json
        return response()->json([
            'success' => true,
            'message' => 'menampilkan Data Suplier',
            'data' => $suplier,
        ], 200);

    }

     public function edit($id)
    {

    }

     public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'alamat' => 'required',
        // ]);

        $suplier = suplier::findOrFail($id);
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();

        return response()->json([
            'success' => true,
            'message' => ' Data Suplier berhasil diedit',
            'data' => $suplier,
        ], 200);


    }

}
