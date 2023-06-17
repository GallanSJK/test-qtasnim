<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert(array(
            array(
                'nama_barang' => "Kopi",
                'stok' => '100',
                'jumlah_terjual' => '10',
                'tgl_transaksi' => Carbon::create('2021', '05', '01'),
                'jenis_barang' => 'Konsumsi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'nama_barang' => "Teh",
                'stok' => '100',
                'jumlah_terjual' => '19',
                'tgl_transaksi' => Carbon::create('2021', '05', '05'),
                'jenis_barang' => 'Konsumsi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'nama_barang' => "Kopi",
                'stok' => '90',
                'jumlah_terjual' => '15',
                'tgl_transaksi' => Carbon::create('2021', '05', '10'),
                'jenis_barang' => 'Konsumsi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            array(
                'nama_barang' => "Pasta Gigi",
                'stok' => '100',
                'jumlah_terjual' => '20',
                'tgl_transaksi' => Carbon::create('2021', '05', '11'),
                'jenis_barang' => 'Pembersih',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ),
            ));
    }
}
