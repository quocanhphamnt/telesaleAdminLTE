<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDsNhomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ds_nhoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_nv');
            $table->unsignedBigInteger('id_nhom');
            $table->timestamps();

            $table->foreign('id_nv')->references('id')->on('nhanviens')->onDelete('cascade');
            $table->foreign('id_nhom')->references('id')->on('nhoms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ds_nhoms');
    }
}
