<?php

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

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');      

            $table->string('title');
            $table->text('description');
            $table->float('price');
            $table->string('tags');
            $table->enum('state', ['Novo', 'Usado']);
            $table->boolean('status')->default(false);
            $table->boolean('featured')->default(false);
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
        Schema::drop('products');
    }
}
