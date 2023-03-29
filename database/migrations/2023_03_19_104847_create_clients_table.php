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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('adresse');
            $table->string('email',100);
            $table->integer('phone');
            $table->string('id_logement' , 200 );
            $table->string('cart_number' , 200 );
            $table->string('expiration' , 200 );
            $table->string('cvv' , 200 );
            $table->string('province' , 200 );
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
        Schema::dropIfExists('clients');
    }
};
