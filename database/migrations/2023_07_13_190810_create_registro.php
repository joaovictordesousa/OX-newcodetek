<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('registro', function (Blueprint $table) {
            $table->id();
            $table->integer('nranimal'); 
            $table->string('racaboi');
            $table->date('dtinseminacao');
            $table->date('dtprevista');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registro');
    }
};
