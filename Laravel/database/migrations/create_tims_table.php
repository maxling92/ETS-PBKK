<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tims', function (Blueprint $table) {
            $table->bigIncrements('tim_id');
            $table->string('tim_name');
            // $table->string('username');
            $table->string('tim_password');
            $table->string('tim_role');
            $table->string('tim_email');
            $table->string('tim_phone');
            $table->string('tim_addres');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tims');
    }
};
