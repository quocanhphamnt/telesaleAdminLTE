<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ten_nv');
            $table->string('sdt')->nullable();
            $table->string('khuvuc')->nullable();
            $table->string('diachi')->nullable();
            $table->unsignedBigInteger('id_qh');
            $table->timestamps();

            $table->foreign('id_qh')->references('id')->on('quyenhans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanviens');
    }
}
