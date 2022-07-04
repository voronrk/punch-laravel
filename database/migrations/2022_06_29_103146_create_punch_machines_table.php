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
        Schema::create('punch_machines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('punche_id');
            $table->unsignedBigInteger('machine_id');

            $table->foreign('punche_id')->references('id')->on('punches');
            $table->foreign('machine_id')->references('id')->on('machines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punch_machines');
    }
};
