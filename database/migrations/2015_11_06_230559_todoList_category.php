<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TodoListCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todoList_category',function(Blueprint $table){
           $table->increments('id');

           $table->integer('todoList_id')->unsigned()->nullable();
           $table->foreign('todoList_id')->references('id')->on('todoLists')->onDelete('cascade');

           $table->integer('category_id')->unsigned()->nullable();
           $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::drop('todoList_category');
    }
}
