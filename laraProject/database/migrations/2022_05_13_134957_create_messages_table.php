<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('testo');
            $table->boolean('visualizzato');
            $table->string('user_mitt')->index();
            $table->foreign('user_mitt')->references('username')->on('users');
            $table->string('user_dest')->index();
            $table->foreign('user_dest')->references('username')->on('users');
            $table->bigInteger('id_alloggio')->unsigned()->index();
            $table->foreign('id_alloggio')->references('id')->on('accomodations');
            $table->timestamps('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
