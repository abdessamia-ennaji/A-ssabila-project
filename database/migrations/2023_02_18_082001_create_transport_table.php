<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->string('numMatricule');
            $table->string('licence');
            $table->string('laVisite');
            $table->date('dateDebutlaVisite');
            $table->date('dateFinlaVisite');
            $table->string('cartGrise');
            $table->date('dateDebutcartGrise');
            $table->date('dateFincartGrise');
            $table->date('dateDebutAssurance');
            $table->date('dateFinAssurance');
            $table->string('lettrevoiture');
            
            
            $table->integer('chauffeurId');
            $table->integer('escorteId');
            $table->string('trajet');
            $table->integer('nbrChaises');

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
        Schema::dropIfExists('transports');
    }
};
