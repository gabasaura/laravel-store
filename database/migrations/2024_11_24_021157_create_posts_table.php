<?php

use Carbon\Carbon;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable()->default('text');
            $table->string('slug', 255)->nullable()->default('text');
            $table->string('date')->nullable()->default(Carbon::now());
            $table->string('image', 260)->nullable()->default('text');
            $table->text('description')->nullable()->default('text');
            $table->text('text')->nullable()->default('text');

            
            $table->enum('posted', ['yes', 'not'])->nullable()->default(['not']);
            $table->enum('type', ['advert', 'post', 'course', 'movie'])->nullable()->default(['post']);

            $table->foreignId('category_id')->constrained()->onDelete('CASCADE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
