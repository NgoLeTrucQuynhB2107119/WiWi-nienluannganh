<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('LOAI_THU_CUNG', function (Blueprint $table) {
            $table->id('LTC_MA');
            $table->string('LTC_TEN');
            $table->text('LTC_MOTA')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('LOAI_THU_CUNG');
    }
};