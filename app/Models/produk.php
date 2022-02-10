<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $visible =['nama_barang', 'suplier_id', 'harga', 'stok', 'cover'];
    protected $fillable =['nama_barang', 'suplier_id', 'harga', 'stok', 'cover'];
    public $timestamps = true;


   public function suplier()
   {
        return $this->belongsTo(suplier::class,'suplier_id','id');
     // $this->belongsTo('App\Models\suplier', 'suplier_id');
   }

    public function image()
    {
        if ($this->cover && file_exists(public_path('images/produk/' . $this->cover))) {
            return asset('images/produk/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/produk/' . $this->cover))) {
            return unlink(public_path('images/produk/' . $this->cover));
        }

    }
}
