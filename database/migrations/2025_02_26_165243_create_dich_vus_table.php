<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateDichVusTable extends Migration
{
    public function up()
    {
        Schema::create('dich_vus', function (Blueprint $table) {
            $table->id('DV_MA');
            $table->string('DV_TEN', 100);
            $table->text('DV_MOTA')->nullable();
            $table->decimal('DV_GIA', 10, 2);
            $table->time('DV_THOIGIAN_THUCHIEN')->nullable();
            $table->integer('LDV_MA')->unsigned();
            $table->foreign('LDV_MA')->references('LDV_MA')->on('loai_dich_vus')->onDelete('cascade');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('dich_vus');
    }
}