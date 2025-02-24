<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('DICH_VU', function (Blueprint $table) {
            $table->id('DV_MA');
            $table->string('DV_TEN');
            $table->text('DV_MOTA')->nullable();
            $table->decimal('DV_GIA', 10, 2);
            $table->integer('DV_THOIGIAN_THUCHIEN'); // Thời gian thực hiện (phút)
            $table->foreignId('LDV_MA')->constrained('LOAI_DICH_VU')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('DICH_VU');
    }
};