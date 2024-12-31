<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID column
            $table->string('name'); // Client's name
            $table->string('phone'); // Client's phone number
            $table->integer('mbps'); // Mbps value
            $table->decimal('price', 10, 2); // Price with two decimal points
            $table->string('gmail'); // Client's email
            $table->string('address'); // Client's address
            $table->string('location'); // Client's location
            $table->string('status')->default('waiting'); // Status of the request
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
