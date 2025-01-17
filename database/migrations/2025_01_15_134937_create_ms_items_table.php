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
        Schema::create('ms_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price',10,2);
            $table->text('itemdesc');
            $table->unsignedBigInteger('categoryid');
            $table->timestamps();

            $table->foreign('categoryid')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_items');
    }
};
