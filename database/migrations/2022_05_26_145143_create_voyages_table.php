<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->bigIncrements('id_voyage');
            $table->date('datevoyage');
            $table->time('heure_depart');
            $table->integer('ticketsvendus')->default(0);
            $table->integer('id_vehicule');
            $table->integer('id_ligne');
            $table->foreign('id_vehicule')->references('id_vehicule')->on('vehicules')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_ligne')->references('id_ligne')->on('lignes')->onDelete('set null')->onUpdate('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('voyages');
    }
}
