<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ChenLaptop extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i <= 100; $i++) {
            $tensp = ['MacBook Air', 'MacBook Pro 16', 'Asus Vivobook', 'Asus TUF Gaming', 'HP Pavilion', 'Lenovo IdeaPad', 'Lenovo Legion', 'Lenovo ThinkPad', 'Lenovo Thinkbook', 'Acer Nitro', 'Acer Aspire', 'MSI Gaming', 'MSI Modern', 'Dell Vostro', 'Dell Inspiron', 'Gigabyte Gaming G5'];
            $gia = mt_rand(5000000, 100000000) / 10;
            $sanPhamId = DB::table('sanpham')->insertGetId([
                'ten_san_pham' => 'Laptop ' . Arr::random($tensp) . ' ' . Str::random(2),
                'gia' => $gia,
                'gia_khuyen_mai' => $gia * 1.5,
                'hinh' => 'lt' . mt_rand(1, 52) . '.webp',
                'id_loai' => '2',
            ]);

            for ($j = 0; $j < 2; $j++) {
                DB::table('chitietsanpham')->insert([
                    'id_san_pham' => $sanPhamId,
                    'RAM' =>  mt_rand(4, 32) . 'GB',
                    'CPU' =>  Str::random(5) . ' ' . mt_rand(5, 10) . 'th Gen',
                    'mau_sac' => Arr::random(['Đen', 'Bạch Kim', 'Xanh', 'Đỏ', 'Vàng']),
                    'gia' => $gia,
                    'so_luong' => mt_rand(10, 50),
                ]);
            }
        }
    }
}
