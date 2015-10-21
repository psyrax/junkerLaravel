<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('collection_id');
            $table->timestamps();
            
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('region')->nullable();
            $table->string('platform')->nullable();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('catalog_number')->nullable();
            $table->string('isbn')->nullable();
            $table->string('sku')->nullable();
            $table->string('role')->nullable();
            
            $table->boolean('directed')->nullable();
            $table->boolean('kojima_team')->nullable();
            
            $table->date('release_date')->nullable();
            $table->integer('year')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
