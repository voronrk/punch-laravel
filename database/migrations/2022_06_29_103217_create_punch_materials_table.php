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
        Schema::create('punch_materials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('punch_id');
            $table->unsignedBigInteger('material_id');

            $table->foreign('punch_id')->references('id')->on('punches');
            $table->foreign('material_id')->references('id')->on('materials');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('punch_materials');
    }
};
