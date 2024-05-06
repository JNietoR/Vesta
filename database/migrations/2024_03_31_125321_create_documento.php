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
        Schema::create('documento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 200);
            $table->text('contenido')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'fk_documento_usuario_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento');
    }
};
