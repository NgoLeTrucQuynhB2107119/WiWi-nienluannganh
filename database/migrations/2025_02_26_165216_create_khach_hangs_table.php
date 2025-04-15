<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateKhachHangsTable extends Migration
{
    public function up()
    {
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id('KH_MA');
            $table->string('KH_EMAIL', 255);
            $table->string('KH_MATKHAU', 255);
            $table->string('KH_HOTEN', 100)->nullable();
            $table->enum('KH_GIOITINH', ['Nam', 'Nữ', 'Không muốn cung cấp'])->nullable();
            $table->string('KH_SDT', 20)->nullable();
            $table->string('KH_DIACHI', 255)->nullable();
            $table->timestamp('CREATED_AT')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UPDATED_AT')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('khach_hangs');
    }
}