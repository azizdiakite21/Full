<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->bigIncrements('id_vehicule');
            $table->integer('nbplaces');
            $table->string('plaque');
            $table->string('marque');
            $table->boolean('climatisation');
            $table->string('statut');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement("alter table vehicules add check (statut in ('maintenance', 'opérationnel'));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
}
