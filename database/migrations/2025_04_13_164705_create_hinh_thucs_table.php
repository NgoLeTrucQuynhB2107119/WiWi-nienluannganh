<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHinhThucsTable extends Migration
{
    public function up()
    {
        Schema::create('hinh_thucs', function (Blueprint $table) {
            $table->id('HT_MA');
            $table->string('HT_TEN');
            $table->timestamp('CREATED_AT')->useCurrent();
            $table->timestamp('UPDATED_AT')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hinh_thucs');
    }
}
