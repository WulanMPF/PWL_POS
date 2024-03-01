<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 08:30:25',
                'stok_jumlah' => 120
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 08:35:30',
                'stok_jumlah' => 150
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 08:40:35',
                'stok_jumlah' => 20
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 08:45:40',
                'stok_jumlah' => 50
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 08:50:45',
                'stok_jumlah' => 35
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 08:55:50',
                'stok_jumlah' => 20
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 09:00:55',
                'stok_jumlah' => 200
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 09:05:00',
                'stok_jumlah' => 180
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 09:10:05',
                'stok_jumlah' => 50
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'user_id' => 1,
                'stok_tanggal' => '2024-03-1 09:15:10',
                'stok_jumlah' => 80
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
