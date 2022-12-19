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
        Schema::create('superhuman_group', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superhuman_id')
                ->references('id')
                ->on('superhumans');
            $table->foreignId('groups_id')
                ->references('id')
                ->on('groups');

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
        Schema::dropIfExists('superhuman_groups');
    }
};
