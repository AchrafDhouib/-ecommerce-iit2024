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
        Schema::create('scategories', function (Blueprint $table) {
            $table->id();
            $table->string('nomscategorie',60)->unique();
            $table->string('imagescategorie',200)->nullable();
            $table->unsignedBigInteger('categorieID')
            ->reference("id")->on('categories')->ondelete("restrict");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scategories');
    }
};
