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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',25);
            $table->string('stazione_di_partenza',25);
            $table->string('stazione_di_arrivo',25);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno',4);
            $table->smallInteger('numero_carozze');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancelatto')->default(0);

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
        Schema::dropIfExists('trains');
    }
};
