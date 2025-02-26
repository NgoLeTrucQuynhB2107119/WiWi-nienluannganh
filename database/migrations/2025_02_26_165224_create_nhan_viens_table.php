<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateNhanViensTable extends Migration
{
    public function up()
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->increments('NV_MA');
            $table->string('NV_EMAIL', 255);
            $table->string('NV_HOTEN', 100)->nullable();
            $table->enum('NV_GIOITINH', ['Nam', 'Nữ', 'Không muốn cung cấp'])->nullable();
            $table->string('NV_SDT', 20)->nullable();
            $table->integer('CV_MA')->unsigned();
            $table->foreign('CV_MA')->references('CV_MA')->on('chuc_vus')->onDelete('cascade');
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('nhan_viens');
    }
}