<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('KHACH_HANG', function (Blueprint $table) {
            $table->id('KH_MA');
            $table->string('KH_EMAIL')->unique();
            $table->string('KH_HOTEN');
            $table->enum('KH_GIOITINH', ['Nam', 'Nữ', 'Không muốn cung cấp'])->nullable();
            $table->string('KH_SDT', 20)->nullable();
            $table->string('KH_DIACHI')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('KHACH_HANG');
    }
};