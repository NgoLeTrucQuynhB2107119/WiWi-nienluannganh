<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('NHAN_VIEN', function (Blueprint $table) {
            $table->id('NV_MA');
            $table->string('NV_EMAIL')->unique();
            $table->string('NV_HOTEN');
            $table->enum('NV_GIOITINH', ['Nam', 'Nữ', 'Không muốn cung cấp'])->nullable();
            $table->string('NV_SDT', 20)->nullable();
            $table->string('NV_ANHDAIDIEN')->nullable(); // Đường dẫn ảnh đại diện
            $table->foreignId('CV_MA')->constrained('CHUC_VU')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('NHAN_VIEN');
    }
};