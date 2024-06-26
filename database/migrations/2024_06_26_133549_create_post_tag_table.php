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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
             //Atributos foraneos
             $table->unsignedBigInteger('post_id');
             $table->unsignedBigInteger('tag_id');
              //referenciando la tabla categorias
              $table->foreign('post_id') ->references('id') ->on('posts')->onDelete('cascade');
            //referenciando la tabla users
             $table->foreign('tag_id') ->references('id') ->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
