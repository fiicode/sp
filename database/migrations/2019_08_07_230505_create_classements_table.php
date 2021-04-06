<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id_to');
            $table->integer('user_id_from');
            $table->integer('user_id_to_score')->default(0);
            $table->integer('user_id_from_score')->default(0);
            $table->boolean('ptour')->default(false);
            $table->boolean('qfinal')->default(false);
            $table->boolean('dfinal')->default(false);
            $table->boolean('final')->default(false);
            $table->string('heur')->nullable();
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('eliminat')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classements');
    }
}
