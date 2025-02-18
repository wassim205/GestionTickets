<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tickets', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('agent_id')->nullable()->constrained('users')->onDelete('set null');
        $table->enum('status', ['pending', 'in_progress', 'resolved'])->default('pending');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            //
        });
    }
};
