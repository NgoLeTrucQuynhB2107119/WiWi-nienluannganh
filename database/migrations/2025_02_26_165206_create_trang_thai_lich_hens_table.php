<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateTrangThaiLichHensTable extends Migration
{
    public function up()
    {
        Schema::create('trang_thai_lich_hens', function (Blueprint $table) {
            $table->id('TTLH_MA');
            $table->string('TTLH_TEN', 100);
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('trang_thai_lich_hens');
    }
}
