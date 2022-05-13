<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nota');
            $table->dateTime('data_invio');
            $table->date('data_inizio');
            $table->date('data_fine');
            $table->dateTime('data_stipula')->nullable();
            $table->bigInteger('id_alloggio')->unsigned()->index();
            $table->foreign('id_alloggio')->references('id')->on('accomodations');
            $table->string('user_locatario')->index();
            $table->foreign('user_locatario')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
