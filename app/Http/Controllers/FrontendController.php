<?php

namespace App\Http\Controllers;

use App\Models\produk;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $produk = produk::all();
        return view('layouts.frontend', compact('produk'));
    }
}
