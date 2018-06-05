<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtisteTypeShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_type_show', function (Blueprint $table) {
             $table->increments('id');

            $table->integer('artist_type_id')->unsigned()->index();
            $table->foreign('artist_type_id')
              ->references('id')
              ->on('artiste_type')
              ->onDelete('cascade'); 

            $table->integer('show_id')->unsigned()->index();
            $table->foreign('show_id')
              ->references('id')
              ->on('shows')
              ->onDelete('cascade'); 


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
        Schema::dropIfExists('artiste_type_show');
    }
}
