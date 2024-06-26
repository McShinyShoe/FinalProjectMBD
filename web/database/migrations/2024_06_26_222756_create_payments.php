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
        Schema::create('Payments', function (Blueprint $table) {
            $table->integer('Payments_ID')->nullable(false);                                // Payments_ID int  NOT NULL,
            $table->decimal('Payments_Amount', 8, 2)->nullable(false);                      // Payments_Amount decimal(8,2)  NOT NULL,
            $table->integer('Orders_Orders_ID')->nullable(false);                           // Orders_Orders_ID int  NOT NULL,
            $table->primary('Payments_ID');                                                 // PRIMARY KEY (Payments_ID),
            $table->foreign('Orders_Orders_ID')->references('Orders_ID')->on('Orders');                                             // FOREIGN KEY Payments_Orders (Orders_Orders_ID) REFERENCES Orders (Orders_ID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Payments');
    }
};
