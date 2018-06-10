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
              //oui safi n9elboh 7it aslan mli sewelt l prof 9ali juste za3ma wach reservable wla la ( bookable wla la)
            $table->boolean('bookable')->default(false);
            
            $table->float('price')->nullable();
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
        Schema::dropIfExists('shows');
    }
}
