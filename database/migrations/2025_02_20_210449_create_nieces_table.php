<?php

use App\Models\Owner;
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
    Schema::create('nieces', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('type');
      $table->boolean('can_talk');
      $table->foreignIdFor(Owner::class);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('nieces');
  }
};
