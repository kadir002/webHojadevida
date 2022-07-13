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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('img_perfi',250)->nullable();
            $table->string('direccion',200)->nullable();;
            $table->string('telefono',20)->nullable();;
            $table->text('descripcion',255)->nullable();;
            $table->string('email',100)->unique();
            $table->string('password');
            $table->string('facebook')->nullable();;
            $table->string('twitter')->nullable();;
            $table->string('linkedin')->nullable();;
            $table->string('estado')->default('p');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
