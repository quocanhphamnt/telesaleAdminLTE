<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDsKhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ds_khs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_nv');
            $table->unsignedBigInteger('id_kh');
            $table->timestamps();

            $table->foreign('id_nv')->references('id')->on('nhanviens')->onDelete('cascade');
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
        Schema::dropIfExists('ds_khs');
    }
}
