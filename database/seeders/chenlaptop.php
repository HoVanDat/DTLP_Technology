<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class chenlaptop extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<=100;$i++){
            $tensp= ['MacBook Air','MacBook Pro 16','Asus Vivobook','Asus TUF Gaming','HP Pavilion' ,'Lenovo IdeaPad','Lenovo Legion','Lenovo ThinkPad','Lenovo Thinkbook','Acer Nitro','Acer Asprire','MSI Gaming','MSI Modern','Dell Vostro','Dell Inspiron','Gigabyte Gaming G5'];
            $gia=  mt_rand(5000000,100000000)/10;
        \DB::table('sanpham')->insert([
            'ten_san_pham'=>'Laptop'. Arr::random($tensp).' '.Str::random(2),
            'gia' =>$gia,
            'gia_khuyen_mai'=> $gia *1.5 ,
            'hinh'=> 'lt'.mt_rand(1,52).'.webp',
            'id_loai'=>'2'
        ]);
        }}}
