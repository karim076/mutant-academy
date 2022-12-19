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
        Schema::create('superhuman_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superhuman_id')
                ->references('id')
                ->on('superhumans');

            $table->foreignId('types_id')
                ->references('id')
                ->on('types');

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
        Schema::dropIfExists('superhuman_type');
    }
};
