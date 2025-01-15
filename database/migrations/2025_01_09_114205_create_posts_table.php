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
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key column named 'id'.
            $table->string('name'); // Creates a 'name' column of type string (e.g., for the post title).
            $table->text('description'); // Creates a 'description' column of type text (for the post's content).
            $table->string('image')->nullable(); // Creates an 'image' column of type string and allows null values.
            $table->timestamps(); // Adds 'created_at' and 'updated_at' timestamp columns.
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
