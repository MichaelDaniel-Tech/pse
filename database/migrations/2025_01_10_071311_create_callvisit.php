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
        Schema::create('web_pse_callvisit', function (Blueprint $table) {
            $table->id();
            $table->string('customer');
            $table->date('visitdate');
            $table->string('topic');
            $table->date('nextvisit');
            $table->string('nexttopic');
            $table->string('pic');
            $table->integer('qty');
            $table->string('type');
            $table->integer('phone');
            $table->string('location');
            $table->string('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_pse_callvisit');
    }
};
