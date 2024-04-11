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
        Schema::create('listed_books', function (Blueprint $table) {
            $table->id();
            $table->string('seller_id')->nullable();
            $table->string('author_name');
            $table->string('book_category');
            $table->string('book_title');
            $table->string('book_subtitle')->nullable();
            $table->string('book_image');
            $table->string('book_original_price')->nullable();
            $table->string('book_selling_price');
            $table->string('book_description');
            $table->string('sold_by');
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
        Schema::dropIfExists('listed_books');
    }
};