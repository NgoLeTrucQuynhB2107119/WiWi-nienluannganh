<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('LOAI_DICH_VU', function (Blueprint $table) {
            $table->id('LDV_MA');
            $table->string('LDV_TEN');
            $table->text('LDV_MOTA')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('LOAI_DICH_VU');
    }
};