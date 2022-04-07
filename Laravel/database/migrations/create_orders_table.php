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
        Schema::create('Order', function (Blueprint $table) {
            $table->bigIncrements('or_id');
            $table->unsignedBigInteger('or_user_id');
            $table->unsignedBigInteger('or_ln_id');
            $table->string('or_address');
            $table->string('or_status');
            $table->timestamps();
            $table->timestamp('or_confirm');

            $table->foreign('or_user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('or_ln_id')->references('ln_id')->on('Services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
