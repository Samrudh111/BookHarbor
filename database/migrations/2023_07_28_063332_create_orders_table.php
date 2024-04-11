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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('cart_id')->constrained()->onDelete('cascade');
            $table->foreignId('address_id')->constrained();
            $table->foreignId('payment_id')->constrained()->onDelete('cascade')->nullable();
            $table->string('r_pay_id')->nullable();
            $table->string('status')->nullable();
            $table->string('ordered_at')->nullable();
            $table->string('packed_at')->nullable();
            $table->string('shipped_at')->nullable();
            $table->string('delivered_at')->nullable();
            $table->string('reason_to_cancel')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
