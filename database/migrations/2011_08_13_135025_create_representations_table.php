<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
           $table->increments('id');

            $table->integer('show_id')->unsigned()->index();
            $table->foreign('show_id')
              ->references('id')
              ->on('shows')
              ->onDelete('cascade'); 
            $table->datetime('when')->nullable();

            $table->integer('location_id')->unsigned()->index();
            $table->foreign('location_id')
              ->references('id')
              ->on('locations')
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
        Schema::dropIfExists('representations');
    }
}
