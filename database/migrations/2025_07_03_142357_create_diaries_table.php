<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->id();                       
            $table->date('date');              
            $table->string('title');           
            $table->text('body');               
            $table->timestamps();               
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diaries');
    }
};