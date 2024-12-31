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
        Schema::table('clients', function (Blueprint $table) {
            // Add the 'mbps' and 'price' columns
            $table->integer('mbps')->nullable(); // Allows null values if not required
            $table->decimal('price', 8, 2)->nullable(); // Decimal with 8 digits total and 2 decimal places
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            // Remove the 'mbps' and 'price' columns
            $table->dropColumn(['mbps', 'price']);
        });
    }
};
