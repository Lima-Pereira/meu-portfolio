<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table){
            $table->id();
            $table->string('title');         //Título do projeto
            $table->text('description');     //descrição do projeto
            $table->string('link');          //link para o GitHub / site
            $table->string('image')->nullable();   //Caminho da img  (opcional)
            $table->timestamps();                  //Cria 'created_at' Armazena a data e a hora exatas de quando o registro foi inserido no banco pela primeira vez. e 'updated_at' armazena a data e a hora de quando o registro sofreu qualquer alteração
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
