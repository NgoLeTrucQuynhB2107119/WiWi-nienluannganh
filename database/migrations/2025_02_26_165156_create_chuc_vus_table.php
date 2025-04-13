<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateChucVusTable extends Migration
{
    public function up()
    {
        Schema::create('chuc_vus', function (Blueprint $table) {
            $table->id('CV_MA');
            $table->string('CV_TEN', 100);
            $table->text('CV_MOTA')->nullable();
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('chuc_vus');
    }
}