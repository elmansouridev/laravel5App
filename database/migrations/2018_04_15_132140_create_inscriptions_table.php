<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('napogee');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNais');
            $table->string('lieuNais');
            $table->integer('anneeBac');
            $table->float('moyenBac');
            $table->string('filiereLycee');
            $table->string('fiiereInscFaq');
            $table->integer('anneeInscFaq');
            $table->integer('modulesValides');
            $table->string('adresse');
            $table->string('travailParent');
            $table->string('boursier');
            $table->integer('nbrEnfantFamille');
            $table->date('marrakechLe');
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
        Schema::dropIfExists('inscriptions');
    }
}
