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
        Schema::create('tblusuarios', function (Blueprint $table) {
            $table->id('idUsuario');
            $table->string('nomeUsuario');
            $table->string('emailUsuario')->unique();
            $table->string('senhaUsuario');
            $table->string('telefoneUsuario');
            $table->string('tipo_usuario_id');
            $table->string('tipo_usuario_type');
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
