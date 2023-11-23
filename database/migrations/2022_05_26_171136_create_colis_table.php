<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->bigIncrements('id_colis');
            $table->string('contenu');
            $table->string('nomdestinataire');
            $table->string('prenomdestinataire');
            $table->string('destination');
            $table->string('telephonedestinataire');
            $table->integer('poids');
            $table->integer('taxage');
            $table->timestamp('date_enregistrement')->default(date("Y-m-d H:i:s"));
            $table->string('statut_colis');
            $table->string('code_colis')->unique();
            $table->integer('id_voyage');
            $table->integer('id_client');
            $table->integer('id_caissier');
            $table->foreign('id_voyage')->references('id_voyage')->on('voyages')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_client')->references('id_client')->on('clients')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_caissier')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement("alter table colis add check (statut_colis in ('remis', 'arrivé', 'station'));");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colis');
    }
}
