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
        Schema::create('mandals', function (Blueprint $table) {
            $table->id();
            $table->string('mandal');
            $table->bigInteger('assembly_id')->unsigned()->default(null)->nullable();
            $table->index('assembly_id');
            $table->foreign('assembly_id')->references('id')->on('assemblies');

            $table->bigInteger('district_id')->unsigned()->default(null)->nullable();
            $table->index('district_id');
            $table->foreign('district_id')->references('id')->on('districts');
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
        Schema::dropIfExists('mandals');
    }
};
