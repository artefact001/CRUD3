<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rayons', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('partie')->comment('Indique si le livre se trouve sur la première moitié ou la seconde moitié du rayon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rayons');
    }
};

