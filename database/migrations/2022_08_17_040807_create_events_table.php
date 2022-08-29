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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('details');
            $table->string('place')->default(null)->nullable();
            $table->time('from_time')->default(null)->nullable();
            $table->time('to_time')->default(null)->nullable();
            $table->date('from_date')->default(null)->nullable();
            $table->date('to_date')->default(null)->nullable();
            $table->string('image')->default(null)->nullable();
            $table->json('gallery')->nullable()->default(null);
            $table->boolean('expired')->default(false);
            $table->timestamps();
            $table->bigInteger('user_id')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
