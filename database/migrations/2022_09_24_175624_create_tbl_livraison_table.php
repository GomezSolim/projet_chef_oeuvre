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
        Schema::create('tbl_livreur', function (Blueprint $table) {
            $table->increments('livreur_id');
            $table->string('livreur_F_nom');
            $table->string('livreur_L_nom');
            $table->string('livreur_adresse');
            $table->string('livreur_telephone');
            $table->string('livreur_email');
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
        Schema::dropIfExists('tbl_livraison');
    }
};
