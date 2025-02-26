<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateGiongThuCungsTable extends Migration
{
    public function up()
    {
        Schema::create('giong_thu_cungs', function (Blueprint $table) {
            $table->increments('GTC_MA');
            $table->string('GTC_TEN', 100);
            $table->text('GTC_MOTA')->nullable();
            $table->integer('LTC_MA')->unsigned();
            $table->foreign('LTC_MA')->references('LTC_MA')->on('loai_thu_cungs')->onDelete('cascade');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('giong_thu_cungs');
    }
}