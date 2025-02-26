<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateThuCungsTable extends Migration
{
    public function up()
    {
        Schema::create('thu_cungs', function (Blueprint $table) {
            $table->increments('TC_MA');
            $table->string('TC_TEN', 100);
            $table->date('TC_NGAYSINH')->nullable();
            $table->float('TC_CANNANG')->nullable();
            $table->string('TC_TINHTRANG_SUC_KHOE', 100)->nullable();
            $table->string('TC_ANHDAIDIEN', 255)->nullable();
            $table->integer('KH_MA')->unsigned();
            $table->integer('GTC_MA')->unsigned()->nullable();
            $table->foreign('KH_MA')->references('KH_MA')->on('khach_hangs')->onDelete('cascade');
            $table->foreign('GTC_MA')->references('GTC_MA')->on('giong_thu_cungs')->onDelete('set null');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('thu_cungs');
    }
}