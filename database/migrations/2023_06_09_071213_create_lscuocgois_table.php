<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLscuocgoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lscuocgois', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nv');
            $table->date('ngay');
            $table->time('thoigiangoi');
            $table->unsignedBigInteger('id_fb');
            $table->unsignedBigInteger('id_nv');
            $table->unsignedBigInteger('id_kh');
            $table->timestamps();

            $table->foreign('id_fb')->references('id')->on('feedback');
            $table->foreign('id_nv')->references('id')->on('nhanviens');
            $table->foreign('id_kh')->references('id')->on('khachhangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lscuocgois');
    }
}
