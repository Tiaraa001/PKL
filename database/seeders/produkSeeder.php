<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\produk;
use App\Models\suplier;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\penjualanDetail;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //sample data suplier
        // $suplier1 = Suplier::create(['nama'=>'lira rahmawati','alamat'=>'kp.ciodeng barat']);
        // $suplier2 = Suplier::create(['nama'=>'meylani rahmawati','alamat'=>'situ terate']);
        // $suplier3 = Suplier::create(['nama'=>'nabila khaerunnisa','alamat'=>'jln.bahuan']);

        //  //membuat sample barang
        //  $produk1 = produk::create(['nama_barang'=>'bola', 'suplier_id'=>$suplier1->id, 'harga'=>'100000', 'stok'=>3]);
        //  $produk2 = produk::create(['nama_barang'=>'raket', 'suplier_id'=>$suplier2->id, 'harga'=>'200000', 'stok'=>3]);
        //  $produk3 = produk::create(['nama_barang'=>'skiping', 'suplier_id'=>$suplier3->id, 'harga'=>'300000', 'stok'=>3]);

        // //  membuat sample pembeli
        // $pelanggan1 = pelanggan::create(['nama'=>'lira rahmawati', 'jenis_kelamin'=>'perempuan', 'alamat'=>'kp.ciodeng', 'email'=>'lira@gmail.com']);
        // $pelanggan2 = pelanggan::create(['nama'=>'mey rahmawati', 'jenis_kelamin'=>'perempuan', 'alamat'=>'situ tatare', 'email'=>'mey@gmail.com']);

        // //  membuat sample penjualan
        // $penjualan1 = penjualan::create(['nama'=>'lira Rahmawati', 'pelanggan_id'=>$pelanggan1->id, 'produk_id'=>$produk1->id, 'harga'=>'100000', 'qty'=>'5']);
        // $penjualan2 = penjualan::create(['nama'=>'mey Rahmawati', 'pelanggan_id'=>$pelanggan2->id, 'produk_id'=>$produk2->id, 'harga'=>'200000', 'qty'=>'4']);

        // //  membuat sample penjualanDetail
        // $penjualanDetail1 = penjualanDetail::create(['penjualan_id'=>$penjualan1->id, 'produk_id'=>$produk1->id, 'kualitas'=>'barang baru', 'qty'=>'5', 'tanggal'=>'2020-04-01', 'harga'=>'20000']);
        // $penjualanDetail2 = penjualanDetail::create(['penjualan_id'=>$penjualan2->id, 'produk_id'=>$produk2->id, 'kualitas'=>'barang baru', 'qty'=>'5', 'tanggal'=>'2020-04-01', 'harga'=>'20000']);


}
    }

