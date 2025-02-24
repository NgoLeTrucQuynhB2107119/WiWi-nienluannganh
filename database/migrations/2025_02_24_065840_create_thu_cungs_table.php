<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('THU_CUNG', function (Blueprint $table) {
            $table->id('TC_MA');
            $table->string('TC_TEN');
            $table->date('TC_NGAYSINH')->nullable();
            $table->float('TC_CANNANG')->nullable();
            $table->string('TC_TINHTRANG_SUC_KHOE')->nullable();
            $table->string('TC_ANHDAIDIEN')->nullable();
            $table->foreignId('KH_MA')->constrained('KHACH_HANG')->onDelete('cascade');
            $table->foreignId('GTC_MA')->nullable()->constrained('GIONG_THU_CUNG')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('THU_CUNG');
    }
};