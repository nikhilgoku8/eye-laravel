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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('blogs_categories')->onDelete('cascade');
            $table->string('title', 128);
            $table->string('slug', 128);
            $table->text('description');
            $table->string('image_file', 256);
            $table->string('meta_title', 128)->nullable();
            $table->string('meta_description', 256)->nullable();
            $table->date('blog_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
