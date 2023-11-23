<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id_tickets');
            $table->integer('numplace');
            $table->string('depart');
            $table->string('arrivee');
            $table->integer('prix');
            $table->string('statut');
            $table->integer('id_voyage');
            $table->integer('id_client');
            $table->foreign('id_voyage')->references('id_voyage')->on('voyages')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_client')->references('id_client')->on('clients')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('tickets');
    }
}
