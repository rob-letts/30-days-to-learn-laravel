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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type');
          });

        Schema::create('owner_tag', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId(App\Models\Owner::class)->constrained()->cascadeOnDelete();
            $table->foreignId(App\Models\Tag::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('owner_tag');
    }
};
