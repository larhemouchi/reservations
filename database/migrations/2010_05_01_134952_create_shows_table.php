<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
         $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->string('poster_url')->nullable();
          //  $table->integer('location_id')->references('id')->on('locations')->nullable();

     $table->integer('location_id')->unsigned()->index();
            $table->foreign('location_id')
              ->references('id')
              ->on('locations')
              ->onDelete('cascade');
             
            $table->boolean('bookable')->default(false);
            
            $table->integer('category_id')->nullable()->index()->default(4);
          $table->foreign('category_id')->references('id')->on('category');

            $table->float('price')->nullable();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shows');
    }
}
