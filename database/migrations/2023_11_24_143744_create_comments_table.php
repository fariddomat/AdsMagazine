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
        Schema::create('comments', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigInteger('user_id')->unsigned();
        $table->bigInteger('parent_id')->nullable();
        $table->text('comment');
        $table->integer('commentable_id')->unsigned();
        $table->string('commentable_type');
        $table->timestamps();


        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('commentable_id')->references('id')->on('ads')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
