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
        Schema::create('tbl_commandes', function (Blueprint $table) {
            $table->increments('commandes_id');
            $table->integer('clients_id');
            $table->integer('livreur_id');
            $table->integer('paiements_id');
            $table->float('commandes_totale');
            $table->integer('commandes_statut');
            $table->dateTime('commandes_date');
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
        Schema::dropIfExists('tbl_commandes');
    }
};
