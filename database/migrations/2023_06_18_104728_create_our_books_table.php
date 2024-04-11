<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_books', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->string('publisher_name');
            $table->string('published_date')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('book_title');
            $table->string('book_subtitle')->nullable();
            $table->string('book_image');
            $table->string('total_books');
            $table->string('book_original_price')->nullable();
            $table->string('book_selling_price');
            $table->string('book_description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('our_books');
    }
};
