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
        Schema::create('tbl_details_commandes', function (Blueprint $table) {
            $table->increments('details_commandes_id');
            $table->integer('commandes_id');
            $table->integer('produits_id');
            $table->string('produits_nom');
            $table->float('produits_prix');
            $table->integer('produits_quantité_vendu');
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
        Schema::dropIfExists('tbl_details_commandes');
    }
};
