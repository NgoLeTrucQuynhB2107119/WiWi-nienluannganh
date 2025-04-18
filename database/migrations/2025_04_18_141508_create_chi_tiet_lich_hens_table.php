<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietLichHensTable extends Migration
{
    public function up()
    {
        Schema::create('chi_tiet_lich_hens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('LH_MA');
            $table->unsignedBigInteger('DV_MA');
            $table->decimal('GIA', 15, 2);
            $table->timestamps();

            $table->foreign('LH_MA')->references('LH_MA')->on('lich_hens')->onDelete('cascade');
            $table->foreign('DV_MA')->references('DV_MA')->on('dich_vus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('chi_tiet_lich_hens');
    }
}