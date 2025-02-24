<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('TRANG_THAI_LICH_HEN', function (Blueprint $table) {
            $table->id('TTLH_MA');
            $table->string('TTLH_TEN');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('TRANG_THAI_LICH_HEN');
    }
};