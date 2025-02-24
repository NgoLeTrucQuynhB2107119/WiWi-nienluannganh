<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('QUAN_TRI_VIEN', function (Blueprint $table) {
            $table->integer('QTV_MA')->default(0)->primary();
            $table->string('QTV_EMAIL')->unique();
            $table->string('QTV_MATKHAU');
            $table->string('QTV_HOTEN');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('QUAN_TRI_VIEN');
    }
};