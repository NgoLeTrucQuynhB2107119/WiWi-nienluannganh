<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateLoaiThuCungsTable extends Migration
{
    public function up()
    {
        Schema::create('loai_thu_cungs', function (Blueprint $table) {
            $table->id('LTC_MA');
            $table->string('LTC_TEN', 100);
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('loai_thu_cungs');
    }
}
