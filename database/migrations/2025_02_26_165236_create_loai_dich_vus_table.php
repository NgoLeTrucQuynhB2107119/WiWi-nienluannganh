<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateLoaiDichVusTable extends Migration
{
    public function up()
    {
        Schema::create('loai_dich_vus', function (Blueprint $table) {
            $table->id('LDV_MA');
            $table->string('LDV_TEN', 100);
            $table->text('LDV_MOTA')->nullable();
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('loai_dich_vus');
    }
}