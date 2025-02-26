<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateQuanTriViensTable extends Migration
{
    public function up()
    {
        Schema::create('quan_tri_viens', function (Blueprint $table) {
            $table->integer('QTV_MA')->primary()->default(0);
            $table->string('QTV_EMAIL', 255)->unique();
            $table->string('QTV_MATKHAU', 255);
            $table->string('QTV_HOTEN', 255);
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('quan_tri_viens');
    }
}