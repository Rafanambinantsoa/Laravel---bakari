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
        Schema::table('logements', function (Blueprint $table) {
            $table->bigInteger('id_agent')->unsigned();
            $table->foreign('id_agent')->references('id')->on('users');
            $table->string('status',200);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('logements', function (Blueprint $table) {
            //
        });
    }
};
