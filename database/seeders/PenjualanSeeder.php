<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Wulan',
                'penjualan_kode' => 'MAR0001',
                'penjualan_tanggal' => '2024-03-10 10:30:25'
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Maulidya',
                'penjualan_kode' => 'MAR0002',
                'penjualan_tanggal' => '2024-03-10 12:35:30'
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Putri',
                'penjualan_kode' => 'APR0001',
                'penjualan_tanggal' => '2024-04-11 09:40:35'
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Firmansyah',
                'penjualan_kode' => 'APR0002',
                'penjualan_tanggal' => '2024-04-11 14:45:40'
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Bintang',
                'penjualan_kode' => 'MEI0001',
                'penjualan_tanggal' => '2024-05-12 11:50:45'
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Akbar',
                'penjualan_kode' => 'MEI0002',
                'penjualan_tanggal' => '2024-05-12 13:55:50'
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Putra',
                'penjualan_kode' => 'JUN0001',
                'penjualan_tanggal' => '2024-06-13 13:55:50'
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Andi',
                'penjualan_kode' => 'JUN0002',
                'penjualan_tanggal' => '2024-06-13 17:00:55'
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Beni',
                'penjualan_kode' => 'JUL0001',
                'penjualan_tanggal' => '2024-07-14 09:05:00'
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Caca',
                'penjualan_kode' => 'JUL0002',
                'penjualan_tanggal' => '2024-07-14 15:10:05'
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
