<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('mbps');
            $table->decimal('price', 10, 2); // Adjust precision and scale as needed
            $table->string('status')->default('waiting');
            $table->timestamps(); // Optional, if you want to track created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
