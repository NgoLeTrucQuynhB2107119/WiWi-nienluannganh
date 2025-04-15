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
            $table->unsignedBigInteger('TTLH_MA');
            $table->unsignedBigInteger('KH_MA');
            $table->unsignedBigInteger('NV_MA');
            $table->unsignedBigInteger('DV_MA');
            $table->unsignedBigInteger('HT_MA');
            $table->unsignedBigInteger('LTC_MA');
            $table->foreign('TTLH_MA')->references('TTLH_MA')->on('trang_thai_lich_hens')->onDelete('cascade');
            $table->foreign('KH_MA')->references('KH_MA')->on('khach_hangs')->onDelete('cascade');
            $table->foreign('NV_MA')->references('NV_MA')->on('nhan_viens')->onDelete('cascade');
            $table->foreign('DV_MA')->references('DV_MA')->on('dich_vus')->onDelete('cascade');
            $table->foreign('HT_MA')->references('HT_MA')->on('hinh_thucs')->onDelete('cascade');
            $table->foreign('LTC_MA')->references('LTC_MA')->on('loai_thu_cungs')->onDelete('cascade');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('lich_hens');
    }
}