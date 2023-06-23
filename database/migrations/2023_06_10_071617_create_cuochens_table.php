<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuochensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuochens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kh');
            $table->date('ngay');
            $table->string('noidung')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('cuochens');
    }
}
