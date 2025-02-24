<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('DANH_GIA', function (Blueprint $table) {
            $table->id('DG_MA');
            $table->integer('DG_DIEMSO');
            $table->text('DG_BINHLUAN')->nullable();
            $table->foreignId('KH_MA')->constrained('KHACH_HANG')->onDelete('cascade');
            $table->foreignId('DV_MA')->constrained('DICH_VU')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('DANH_GIA');
    }
};