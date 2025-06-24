<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('tags', function (Blueprint $table) {
      $table->id();
      $table->string('name')->unique();
      $table->timestamps();
      $table->softDeletes();

      $table->index(['name']);
      $table->index(['created_at']);
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('tags');
  }
};
