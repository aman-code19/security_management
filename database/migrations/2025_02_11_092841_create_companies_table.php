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
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('website'); 
            $table->string('phone1')->nullable(); 
            $table->string('phone2')->nullable(); 
            $table->string('phone3')->nullable(); 
            $table->string('image')->nullable(); 
            $table->string('address')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
