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
        Schema::create('panchayats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pincode');
            $table->string('destrict')->nullable()->default(null);
            $table->integer('public')->default(0);
            $table->string('email')->unique()->default(null)->nullable();
            $table->bigInteger('phone')->nullable()->default(null);
            
            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('panchayats');
    }
};
