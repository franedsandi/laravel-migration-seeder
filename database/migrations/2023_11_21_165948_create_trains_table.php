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
            $table->string('Azienda',50);
            $table->string('Stazione di partenza',100);
            $table->string('Stazione di arrivo',100);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->string('Codice Treno',10);
            $table->string('Numero Carrozze',10);
            $table->boolean('In orario');
            $table->boolean('Cancellato')->nullable(true);
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