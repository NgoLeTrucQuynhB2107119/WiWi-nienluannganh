<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('CHUC_VU', function (Blueprint $table) {
            $table->id('CV_MA');
            $table->string('CV_TEN');
            $table->text('CV_MOTA')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('CHUC_VU');
    }
};