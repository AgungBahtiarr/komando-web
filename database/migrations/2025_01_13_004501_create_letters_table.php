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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('subject');
            $table->string('sender');
            $table->enum('status', ['setum', 'komandan', 'staf', 'pasi', 'bati', 'kasi']);
            $table->enum('classification', ['R', 'B', 'U', 'ST', 'STR']);
            $table->date('rec_date');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->constrained()->cascadeOnDelete()
            ->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
