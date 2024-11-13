<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('brand');
            $table->decimal('price', 10, 2);
            $table->integer('ram');
            $table->enum('type_storage', ['SSD', 'HDD']);
            $table->integer('storage');
            $table->text('processor');
            $table->decimal('screen_size', 4, 1);
            $table->string('image');
            $table->integer('stock');
            $table->string('color');
            $table->string('os');
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
