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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->string('lieu',255);
            $table->integer('prix');
            $table->integer('superficie');
            $table->integer('lit');
            $table->integer('douche');
            $table->text('description');
            $table->integer('garage');
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
        Schema::dropIfExists('logements');
    }
};
