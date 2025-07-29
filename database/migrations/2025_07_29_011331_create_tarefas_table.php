<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id(); // id autoincremento
            $table->string('titulo');
            $table->text('descricao')->nullable(); // opcional
            $table->boolean('concluida')->default(false);
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tarefas');
    }
};

?>