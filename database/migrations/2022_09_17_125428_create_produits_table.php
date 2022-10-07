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
        Schema::create('tbl_produits', function (Blueprint $table) {
            $table->increments('produits_id');
            $table->string('produits_nom');
            $table->integer('categorie_id');
            $table->integer('marques_id');
            $table->longText('produits_details');
            $table->longText('produits_description');
            $table->float('produits_prix');
            $table->string('produits_image');
            $table->string('produits_taille');
            $table->string('produits_couleur');
            $table->integer('statut_publication');
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
        Schema::dropIfExists('tbl_produits');
    }
};
