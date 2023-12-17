<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Chensp1 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($idSanPham = 1; $idSanPham <= 300; $idSanPham++) {
            for ($i = 0; $i < 2; $i++) {
                $gia = mt_rand(5000000, 100000000) / 10;

                DB::table('chitietsanpham')->insert([
                    'id_san_pham' => $idSanPham,
                    'RAM' =>mt_rand(4, 32) . 'GB',
                    'CPU' =>Str::random(5) . ' ' . mt_rand(5, 10) . 'th Gen',
                    'mau_sac' => Arr::random(['Đen', 'Bạch Kim', 'Xanh', 'Đỏ', 'Vàng']),
                    'gia' => $gia,
                    'so_luong' => mt_rand(1, 50),
                ]);
            }
        }
    }
}
