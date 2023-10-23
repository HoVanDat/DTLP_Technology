<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->increments('id_nguoi_dung');
            $table->string('ho')->nullable();
            $table->string('ten');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->integer('vai_tro')->default(0);
            $table->string('hinh')->nullable();
            $table->integer('trang_thai')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoidung');
    }
};
