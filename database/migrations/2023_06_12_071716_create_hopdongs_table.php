<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopdongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopdongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_hd');
            $table->string('noidung');
            $table->string('file');
            $table->date('ngay');
            $table->string('ten_nv');
            $table->unsignedBigInteger('id_nv');
            $table->unsignedBigInteger('id_kh');
            $table->timestamps();

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
        Schema::dropIfExists('hopdongs');
    }
}
