<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('describe')->nullable();
            $table->unsignedBigInteger('region')->nullable();
            $table->unsignedBigInteger('gender')->nullable();
            $table->unsignedBigInteger('id_group')->nullable();
            $table->unsignedBigInteger('id_status')->nullable();
            $table->timestamps();

            $table->foreign('region')->references('id')->on('regions');
            $table->foreign('id_group')->references('id')->on('groups');
            $table->foreign('id_status')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
