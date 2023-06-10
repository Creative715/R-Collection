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
        Schema::create('encategory_enproduct', function (Blueprint $table) {
            $table->unsignedBigInteger('enproduct_id');
            $table->unsignedBigInteger('encategory_id');
            $table->timestamps();

            $table->foreign('enproduct_id')->references('id')->on('enproducts')->onDelete('cascade');
            $table->foreign('encategory_id')->references('id')->on('encategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encategory_enproduct');
    }
};
