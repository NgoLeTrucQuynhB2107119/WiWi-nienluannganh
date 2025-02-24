<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('LICH_HEN', function (Blueprint $table) {
            $table->id('LH_MA');
            $table->dateTime('LH_NGAYGIO');
            $table->foreignId('TTLH_MA')->constrained('TRANG_THAI_LICH_HEN')->onDelete('cascade');
            $table->foreignId('KH_MA')->constrained('KHACH_HANG')->onDelete('cascade');
            $table->foreignId('NV_MA')->nullable()->constrained('NHAN_VIEN')->onDelete('set null');
            $table->foreignId('DV_MA')->constrained('DICH_VU')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('LICH_HEN');
    }
};