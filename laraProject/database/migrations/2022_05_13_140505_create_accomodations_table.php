<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descr');
            $table->string('tipologia', 4);
            $table->string('citta');
            $table->string('prov');
            $table->string('via');
            $table->integer('num_civ')->unsigned();
            $table->bigInteger('sup');
            $table->date('inizio_disp');
            $table->date('fine_disp');
            $table->timestamp('data_ins');
            $table->smallInteger('eta_min');
            $table->smallInteger('eta_max');
            $table->string('sesso', 2);
            $table->double('canone');
            $table->tinyIntegerInteger('posti_letto');
            $table->boolean('cucina');
            $table->smallInteger('num_bagni');
            $table->smallInteger('num_camere');
            $table->boolean('locale_ricreativo');
            $table->boolean('angolo_studio');
            $table->boolean('locale_ricreativo');
            
            $table->string('proprietario')->index();
            $table->foreign('proprietario')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}
