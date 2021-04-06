<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialAuthUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable();
            $table->string('mobile_number')->unique()->nullable();
            $table->boolean('mobile_verified')->default(false);
            $table->enum('sex', ['H', 'F'])->nullable();
            $table->boolean('confirmation')->default(false);
            $table->boolean('confirm_competit')->default(false);
            $table->tinyInteger('active')->default(0)->unsigned();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('access_token')->nullable();
            $table->boolean('user_social_auth')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
