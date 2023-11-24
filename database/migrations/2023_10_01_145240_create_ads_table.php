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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('media_url')->nullable();
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('');
            $table->unsignedBigInteger('ad_slocategory_idt_id');

            $table->string('status')->default('pending');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('ad_slot_id')->references('id')->on('ad_slots')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
