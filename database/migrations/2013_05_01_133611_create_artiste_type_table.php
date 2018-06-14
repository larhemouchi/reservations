<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtisteTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_type', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('artist_id')->unsigned()->index();
            $table->foreign('artist_id')
              ->references('id')
              ->on('artists')
              ->onDelete('cascade'); 

            $table->integer('type_id')->unsigned()->index();
            $table->foreign('type_id')
              ->references('id')
              ->on('types')
              ->onDelete('cascade'); 

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
        Schema::dropIfExists('artiste_type');
    }
}
