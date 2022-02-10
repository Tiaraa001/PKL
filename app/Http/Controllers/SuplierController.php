<?php

namespace App\Http\Controllers;

use Session;
use App\Models\suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suplier = suplier::all();
        return view('suplier.index', compact('suplier'));
        // session::flash("flash_notification",[
        //     "level"=>"success",
        //     "message"=>"berhasil menyimpan"
        // ]);
        // ubah ke json
        // return response()->json([
        //     'success' => true,
        //     'message' => 'list Data Suplier',
        //     'data' => $suplier
        // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.create');
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

        $suplier = new Suplier;
        $suplier->nama = $request->nama;
        $suplier->alamat = $request->alamat;
        $suplier->save();
        return redirect()->route('suplier.index');

        // $this->validate($request, ['nama'=>'required|unique:suplier']);
        // $suplier = suplier::create($request->all());
        // Session::flash("flash_notification",[
        //     "level"=>"success",
        //     "message"=>"berhasil menyimpan"
        // ]);
        // return redirect()->route('suplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.show', compact('suplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('suplier.edit', compact('suplier'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('suplier.index');

        // $this->validate($request, ['nama'=>'required|unique:suplier,nama,alamat'.$id]);
        // $suplier=suplier::find($id);
        // $suplier->update($request->only('nama'));
        // Session::flash("flash_notification",[
        //     "level"=>"success",
        //     "message"=>"berhasil menyimpan"
        // ]);
        // return redirect()->route('suplier.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = suplier::findOrFail($id);
        $suplier->delete();
        return redirect()->route('suplier.index');
    }
}
