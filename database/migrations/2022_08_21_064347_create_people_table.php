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
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->default(null)->nullable();
            $table->bigInteger('phone')->nullable()->default(null);
            $table->bigInteger('pincode')->default(null)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('certificate')->nullable()->default(null);
            $table->string('avatar')->nullable()->default(null);
            $table->string('place')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->string('district')->nullable()->default(null);
            $table->string('geoloc')->nullable()->default(null);
            $table->date('birthday')->nullable()->default(null);
            $table->bigInteger('event_id')->unsigned()->default(null)->nullable();
            $table->index('event_id');
            $table->foreign('event_id')->references('id')->on('events');

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
        Schema::dropIfExists('peoples');
    }
};
