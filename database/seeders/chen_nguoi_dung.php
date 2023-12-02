<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class chen_nguoi_dung extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi_VN');         
        $list_chuc_vu = [
            'Quản lý',
            'Trưởng phòng',
            'Nhân viên kỹ thuật',
            'Nhân viên marketing',
            'Nhân viên bán hàng',
            'Kế toán',
            'Nhân viên IT',
            'Nhân viên tài chính',
            'Giám đốc điều hành',
            'Nhân viên quản trị hệ thống',
        ];

        // Chèn dữ liệu cho 10 nhân viên
        for ($i = 0; $i < 10; $i++) {
            DB::table('nguoidung')->insert([
                'ten' => $faker->name,
                'password' => Hash::make('password'), // Password mặc định là 'password' (có thể thay đổi)
                'email' => $faker->unique()->safeEmail,
                'dia_chi' => $faker->address,
                'so_dien_thoai' => $faker->phoneNumber,
                'vai_tro' => '1',
                'hinh' => $faker->imageUrl(200, 200), 
                'trang_thai' => 'trang_thai_moi',
                'ngay_sinh' => $faker->date(),
                'noi_sinh' => $faker->city,
                'CCCD' => $faker->randomNumber(8),
                'ngay_cap' => $faker->date(),
                'noi_cap' => $faker->city,
                'gioi_tinh' => $faker->randomElement(['0', '1']),
                'chuc_vu' => $faker->randomElement($list_chuc_vu), 
                'tinh_trang_hon_nhan' => $faker->randomElement([0, 1]),                
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Chèn dữ liệu cho 50 khách hàng
        for ($i = 0; $i < 50; $i++) {
            DB::table('nguoidung')->insert([
                'ten' => $faker->name,
                'password' => Hash::make('password'), // Password mặc định là 'password' (có thể thay đổi)
                'email' => $faker->unique()->safeEmail,
                'dia_chi' => $faker->address,
                'so_dien_thoai' => $faker->phoneNumber,
                'vai_tro' => '0',
                'hinh' => $faker->imageUrl(200, 200),               
                'trang_thai' => 'trang_thai_moi',
                'ngay_sinh' => $faker->date(),
                'noi_sinh' => $faker->city,
                'CCCD' => $faker->randomNumber(8),
                'ngay_cap' => $faker->date(),
                'noi_cap' => $faker->city,
                'gioi_tinh' => $faker->randomElement(['0', '1']),
                'chuc_vu' => $faker->randomElement($list_chuc_vu),                
                'bang_cap' => 'bang_cap_moi',
                'tinh_trang_hon_nhan' => $faker->randomElement([0, 1]),                
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


