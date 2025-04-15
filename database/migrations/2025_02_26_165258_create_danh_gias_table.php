<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateDanhGiasTable extends Migration
{
    public function up()
    {
        Schema::create('danh_gias', function (Blueprint $table) {
            $table->id('DG_MA');
            $table->integer('DG_DIEMSO');
            $table->text('DG_BINHLUAN')->nullable();
            $table->unsignedBigInteger('KH_MA');
            $table->unsignedBigInteger('DV_MA');
            $table->foreign('KH_MA')->references('KH_MA')->on('khach_hangs')->onDelete('cascade');
            $table->foreign('DV_MA')->references('DV_MA')->on('dich_vus')->onDelete('cascade');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('danh_gias');
    }
}