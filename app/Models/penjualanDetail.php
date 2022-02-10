<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualanDetail extends Model
{
    use HasFactory;
    protected $visible = ['pelanggan_id', 'produk_id', 'kualitas', 'qty', 'tanggal', 'harga'];
    protected $fillable = ['pelanggan_id', 'produk_id', 'kualitas', 'qty', 'tanggal', 'harga'];
    public $timestamps = true;

    public function penjualan()
    {
        return $this->belongsTo(penjualan::class, 'penjualan_id', 'id');
        // $this->belongsTo('App\Models\suplier', 'suplier_id');
    }

    public function produk()
    {
        return $this->belongsTo(produk::class, 'produk_id', 'id');
        // return $this->belongsTo(pelanggan::class,'pelanggan_id','id');
        // $this->belongsTo('App\Models\suplier', 'suplier_id');
    }
}
