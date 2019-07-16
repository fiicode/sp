<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productName');
            $table->string('mtt1')->nullable();
            $table->string('mtt2')->nullable();
            $table->string('description')->nullable();
            $table->string('avatar')->nullable();
            $table->string('avatar2')->nullable();
            $table->string('avatar3')->nullable();
            $table->integer('categorie_id')->unsigned()->nullable();
            $table->foreign('categorie_id', 'foreign_categorie')->references('id')->on('categories');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id', 'foreign_user')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
            $table->boolean('deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
