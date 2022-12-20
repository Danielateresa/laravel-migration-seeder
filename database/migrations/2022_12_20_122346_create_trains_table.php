<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('stazione_di_partenza', 50);
            $table->string('stazione_di_arrivo', 50);
            $table->string('orario_di_partenza', 10);
            $table->string('orario_di_arrivo', 10);
            $table->string('codice_treno', 20);
            $table->tinyInteger('numero_carrozze')->nullable();
            $table->boolean('in_orario')->default(1)->nullable();
            $table->boolean('cancellato')->default(0)->nullable();
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