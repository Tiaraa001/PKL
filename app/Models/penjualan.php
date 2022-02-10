<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $visible =['nama', 'pelanggan_id', 'produk_id', 'harga', 'qty'];
    protected $fillable =['nama', 'pelanggan_id', 'produk_id', 'harga', 'qty'];
    public $timestamps = true;


   public function produk()
   {
        return $this->belongsTo(produk::class,'produk_id','id');
        // return $this->belongsTo(pelanggan::class,'pelanggan_id','id');
     // $this->belongsTo('App\Models\suplier', 'suplier_id');
   }

   public function pelanggan()
   {
        return $this->belongsTo(pelanggan::class,'pelanggan_id','id');
     // $this->belongsTo('App\Models\suplier', 'suplier_id');
   }
}
