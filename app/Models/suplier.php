<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suplier extends Model
{
    use HasFactory;
     protected $visible =['nama', 'alamat'];
     protected $fillable =['nama', 'alamat'];
     public $timestamps = true;
 

    // public function produk()
    // {
    //      $this->hasMany('App\Models\produk', 'suplier_id');
    // }

    
}
