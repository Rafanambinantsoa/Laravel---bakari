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
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo',255)->nullable();
            $table->string('description',255)->nullable();
            $table->string('skype',255)->nullable();
            $table->integer('mobile')->nullable();
            $table->string('status')->nullable();
            $table->string('role', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uses', function (Blueprint $table) {
            //
        });
    }
};
