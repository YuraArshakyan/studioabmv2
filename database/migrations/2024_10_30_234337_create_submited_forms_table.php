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
        Schema::create('submited_forms', function (Blueprint $table) {
            $table->id();
            $table->text('Name')->nullable();
            $table->text('Phone')->nullable();
            $table->text('email')->nullable();
            $table->text('Message')->nullable();
            $table->enum('form', ['Contacts', 'Updates']);
            $table->enum('status', ['success', 'Fault']);
            $table->enum('sent_to_reserve_email', ['yes', 'no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submited_forms');
    }
};
