<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateLichHensTable extends Migration
{
    public function up()
    {
        Schema::create('lich_hens', function (Blueprint $table) {
            $table->increments('LH_MA');
            $table->dateTime('LH_NGAYGIO');
            $table->integer('TTLH_MA')->unsigned();
            $table->integer('KH_MA')->unsigned();
            $table->integer('NV_MA')->unsigned();
            $table->integer('DV_MA')->unsigned();
            $table->foreign('TTLH_MA')->references('TTLH_MA')->on('trang_thai_lich_hens')->onDelete('cascade');
            $table->foreign('KH_MA')->references('KH_MA')->on('khach_hangs')->onDelete('cascade');
            $table->foreign('NV_MA')->references('NV_MA')->on('nhan_viens')->onDelete('cascade');
            $table->foreign('DV_MA')->references('DV_MA')->on('dich_vus')->onDelete('cascade');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('lich_hens');
    }
}