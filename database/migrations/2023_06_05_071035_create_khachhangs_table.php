<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_kh');
            $table->string('email')->nullable();
            $table->string('sdt')->unique();
            $table->string('diachi')->nullable();
            $table->string('khuvuc')->nullable();
            $table->string('mota')->nullable();
            $table->unsignedBigInteger('id_nhom');
            $table->unsignedBigInteger('id_tt');
            $table->timestamps();

            $table->foreign('id_nhom')->references('id')->on('nhoms');
            $table->foreign('id_tt')->references('id')->on('trangthais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhangs');
    }
}
