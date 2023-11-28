<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\SanPham;
class SanPhamSeeder extends Seeder
{
    //nhập 50 laptop và điện thoại, loại 1 là điện thoại, loại 2 là lap top, ví dụ iphone 13pro thì ghi iphone 13
    public function run()
    {
        $laptopData = [
            [
                'ten_san_pham' => 'MacBook Air 13-inch',
                'gia' => 23990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop MacBook Air 13-inch chính hãng Apple.',
                'hot' => 1,
                'so_luot_xem' => 500,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 22990000,
            ],
            [
                'ten_san_pham' => 'Dell Inspiron 15',
                'gia' => 17990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Dell Inspiron 15 chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 400,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 16990000,
            ],
            [
                'ten_san_pham' => 'HP Spectre x360',
                'gia' => 24990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop HP Spectre x360 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 300,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 23990000,
            ],
            [
                'ten_san_pham' => 'Lenovo ThinkPad X1 Carbon',
                'gia' => 28990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Lenovo ThinkPad X1 Carbon chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 450,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 27990000,
            ],
            [
                'ten_san_pham' => 'Asus ROG Zephyrus G14',
                'gia' => 31990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Asus ROG Zephyrus G14 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 550,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 30990000,
            ],
            [
                'ten_san_pham' => 'Acer Swift 3',
                'gia' => 15990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Acer Swift 3 chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 200,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 14990000,
            ],
            [
                'ten_san_pham' => 'MSI GS66 Stealth',
                'gia' => 35990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop MSI GS66 Stealth chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 600,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 34990000,
            ],
            [
                'ten_san_pham' => 'LG Gram 17',
                'gia' => 30990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop LG Gram 17 chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 350,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 29990000,
            ],
            [
                'ten_san_pham' => 'Razer Blade 15',
                'gia' => 32990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Razer Blade 15 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 400,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 31990000,
            ],
            [
                'ten_san_pham' => 'Microsoft Surface Laptop 4',
                'gia' => 26990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Microsoft Surface Laptop 4 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 300,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 25990000,
            ],
            [
                'ten_san_pham' => 'Samsung Galaxy Book S',
                'gia' => 18990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Samsung Galaxy Book S chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 250,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 17990000,
            ],
            [
                'ten_san_pham' => 'Lenovo Legion 5',
                'gia' => 27990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Lenovo Legion 5 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 500,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 26990000,
            ],
            [
                'ten_san_pham' => 'Huawei MateBook X Pro',
                'gia' => 25990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Huawei MateBook X Pro chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 300,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 24990000,
            ],
            [
                'ten_san_pham' => 'Alienware m15 R4',
                'gia' => 39990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Alienware m15 R4 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 600,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 38990000,
            ],
            [
                'ten_san_pham' => 'Google Pixelbook Go',
                'gia' => 19990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Google Pixelbook Go chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 250,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 18990000,
            ],
            [
                'ten_san_pham' => 'Acer Aspire 5',
                'gia' => 12990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Acer Aspire 5 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 200,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 11990000,
            ],
            [
                'ten_san_pham' => 'Sony VAIO S',
                'gia' => 21990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Sony VAIO S chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 350,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 20990000,
            ],
            [
                'ten_san_pham' => 'Razer Blade Stealth 13',
                'gia' => 30990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Razer Blade Stealth 13 chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 300,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 29990000,
            ],
            [
                'ten_san_pham' => 'MSI Prestige 14',
                'gia' => 26990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop MSI Prestige 14 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 400,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 25990000,
            ],
            [
                'ten_san_pham' => 'LG Gram 14',
                'gia' => 25990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop LG Gram 14 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 300,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 24990000,
            ],
            [
                'ten_san_pham' => 'Asus ZenBook 13',
                'gia' => 19990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Asus ZenBook 13 chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 250,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 18990000,
            ],
            [
                'ten_san_pham' => 'HP Envy 13',
                'gia' => 18990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop HP Envy 13 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 350,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 17990000,
            ],
            [
                'ten_san_pham' => 'Dell XPS 13',
                'gia' => 21990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Dell XPS 13 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 400,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 20990000,
            ],
            [
                'ten_san_pham' => 'Lenovo Yoga 9i',
                'gia' => 25990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Lenovo Yoga 9i chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 300,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => 24990000,
            ],
            [
                'ten_san_pham' => 'Microsoft Surface Laptop Go',
                'gia' => 15990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Microsoft Surface Laptop Go chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 250,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => '14990000',
            ],
            [
                'ten_san_pham' => 'Samsung Galaxy Book Flex 2',
                'gia' => 21990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Samsung Galaxy Book Flex 2 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 350,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => '20990000',
            ],
            [
                'ten_san_pham' => 'Asus ZenBook Duo 14',
                'gia' => 29990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Asus ZenBook Duo 14 chính hãng.',
                'hot' => 0,
                'so_luot_xem' => 400,
                'an_hien' => 1,
                'id_loai' => 2, // Laptop
                'gia_khuyen_mai' => '28990000',
            ],
            [
                'ten_san_pham' => 'Acer Swift 5',
                'gia' => 19990000,
                'hinh' => '', // Để trống hình ảnh
                'mo_ta' => 'Laptop Acer Swift 5 chính hãng.',
                'hot' => 1,
                'so_luot_xem' => 500,
                'an_hien' => 1,
                'id_loai' => 2,
                'gia_khuyen_mai' => '18990000',
            ],
            ];
            $dienThoaiData = [
                // Dữ liệu cho điện thoại 1
                [
                    'ten_san_pham' => 'iPhone 13',
                    'gia' => 32990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại iPhone 13 chính hãng Apple.',
                    'hot' => 1,
                    'so_luot_xem' => 700,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 31990000,
                ],
                // Dữ liệu cho điện thoại 2
                [
                    'ten_san_pham' => 'Samsung Galaxy S21',
                    'gia' => 28990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Samsung Galaxy S21 chính hãng.',
                    'hot' => 0,
                    'so_luot_xem' => 500,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 27990000,
                ],
                // Dữ liệu cho điện thoại 3
                [
                    'ten_san_pham' => 'Xiaomi Redmi Note 10',
                    'gia' => 5490000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Xiaomi Redmi Note 10 chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 600,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 5290000,
                ],
                // Dữ liệu cho điện thoại 4
                [
                    'ten_san_pham' => 'OnePlus 9 Pro',
                    'gia' => 18990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại OnePlus 9 Pro chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 800,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 17990000,
                ],
                // Dữ liệu cho điện thoại 5
                [
                    'ten_san_pham' => 'Google Pixel 6',
                    'gia' => 25990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Google Pixel 6 chính hãng.',
                    'hot' => 0,
                    'so_luot_xem' => 550,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 24990000,
                ],
                // Dữ liệu cho điện thoại 6
                [
                    'ten_san_pham' => 'Huawei P40 Pro',
                    'gia' => 23990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Huawei P40 Pro chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 700,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 22990000,
                ],
                // Dữ liệu cho điện thoại 7
                [
                    'ten_san_pham' => 'Sony Xperia 1 III',
                    'gia' => 30990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Sony Xperia 1 III chính hãng.',
                    'hot' => 0,
                    'so_luot_xem' => 650,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 29990000,
                ],
                // Dữ liệu cho điện thoại 8
                [
                    'ten_san_pham' => 'Nokia 9 PureView',
                    'gia' => 14990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Nokia 9 PureView chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 500,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 13990000,
                ],
                // Dữ liệu cho điện thoại 9
                [
                    'ten_san_pham' => 'LG Velvet',
                    'gia' => 17990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại LG Velvet chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 450,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 16990000,
                ],
                // Dữ liệu cho điện thoại 10
                [
                    'ten_san_pham' => 'Motorola Moto G Power',
                    'gia' => 5490000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Motorola Moto G Power chính hãng.',
                    'hot' => 0,
                    'so_luot_xem' => 600,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 5290000,
                ],
                // Dữ liệu cho điện thoại 11
                [
                    'ten_san_pham' => 'Oppo Find X3 Pro',
                    'gia' => 29990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Oppo Find X3 Pro chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 700,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 28990000,
                ],
                // Dữ liệu cho điện thoại 12
                [
                    'ten_san_pham' => 'Vivo X60 Pro',
                    'gia' => 21990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Vivo X60 Pro chính hãng.',
                    'hot' => 0,
                    'so_luot_xem' => 650,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 20990000,
                ],
                // Dữ liệu cho điện thoại 13
                [
                    'ten_san_pham' => 'Realme GT',
                    'gia' => 12990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Realme GT chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 550,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 11990000,
                ],
                // Dữ liệu cho điện thoại 14
                [
                    'ten_san_pham' => 'BlackBerry Key2',
                    'gia' => 7990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại BlackBerry Key2 chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 500,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 7790000,
                ],
                // Dữ liệu cho điện thoại 15
                [
                    'ten_san_pham' => 'Nubia Red Magic 6',
                    'gia' => 15990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Nubia Red Magic 6 chính hãng.',
                    'hot' => 0,
                    'so_luot_xem' => 600,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 14990000,
                ],
                // Dữ liệu cho điện thoại 16
                [
                    'ten_san_pham' => 'ZTE Axon 30 Ultra',
                    'gia' => 22990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại ZTE Axon 30 Ultra chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 550,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 21990000,
                ],
                // Dữ liệu cho điện thoại 17
                [
                    'ten_san_pham' => 'Motorola Razr 5G',
                    'gia' => 21990000,
                    'hinh' => '', // Để trống hình ảnh
                    'mo_ta' => 'Điện thoại Motorola Razr 5G chính hãng.',
                    'hot' => 1,
                    'so_luot_xem' => 650,
                    'an_hien' => 1,
                    'id_loai' => 1, // Điện thoại
                    'gia_khuyen_mai' => 20990000,
                ],
                // ... Tiếp tục thêm dữ liệu cho các điện thoại khác
                // ...
            ];

        // Thêm dữ liệu vào cơ sở dữ liệu
        SanPham::insert(array_merge( $laptopData, $dienThoaiData));
    }
}
