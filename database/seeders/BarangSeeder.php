<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'PSL0001',
                'barang_nama' => 'Pensil',
                'harga_beli' => 2000,
                'harga_jual' => 5000
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'SPD0001',
                'barang_nama' => 'Spidol',
                'harga_beli' => 15000,
                'harga_jual' => 20000
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'LPT0001',
                'barang_nama' => 'Laptop',
                'harga_beli' => 16000000,
                'harga_jual' => 20000000
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'SMT0001',
                'barang_nama' => 'Smartphone',
                'harga_beli' => 3500000,
                'harga_jual' => 6000000
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SRM0001',
                'barang_nama' => 'Serum',
                'harga_beli' => 250000,
                'harga_jual' => 280000
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'TNR0001',
                'barang_nama' => 'Toner',
                'harga_beli' => 120000,
                'harga_jual' => 150000
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'KRN0001',
                'barang_nama' => 'Kornet',
                'harga_beli' => 9000,
                'harga_jual' => 12000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'SRD0001',
                'barang_nama' => 'Sarden',
                'harga_beli' => 6000,
                'harga_jual' => 10000
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'KMP0001',
                'barang_nama' => 'Kompor',
                'harga_beli' => 450000,
                'harga_jual' => 500000
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'STR0001',
                'barang_nama' => 'Setrika',
                'harga_beli' => 380000,
                'harga_jual' => 430000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
