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
        Schema::create('superhumans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universe_id')
                ->references('id')
                ->on('universes');
            $table->foreignId('types_id')
                ->references('id')
                ->on('types');
            $table->enum('role', ['hero', 'villain']);
            $table->string('name');
            $table->string('avatar');
            $table->string('description');
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
        Schema::dropIfExists('superhumans');
    }
};
