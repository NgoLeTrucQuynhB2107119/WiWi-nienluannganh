<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('GIONG_THU_CUNG', function (Blueprint $table) {
            $table->id('GTC_MA');
            $table->string('GTC_TEN');
            $table->text('GTC_MOTA')->nullable();
            $table->unsignedBigInteger('LTC_MA');
            $table->timestamps();

            $table->foreign('LTC_MA')->references('LTC_MA')->on('LOAI_THU_CUNG')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('GIONG_THU_CUNG');
    }
};