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
        Schema::create('Orders', function (Blueprint $table) {
            $table->integer('Orders_ID')->nullable(false)->autoIncrement();                                        // Orders_ID int  NOT NULL,
            $table->integer('Orders_Days')->nullable(false);                                      // Orders_Days int  NOT NULL,
            $table->date('Orders_StartDate')->nullable(false);                                    // Orders_StartDate date  NOT NULL,
            $table->date('Orders_TakeDate')->nullable(true);                                     // Orders_TakeDate date  NULL,
            $table->integer('Orders_Customers_ID')->nullable(false);                              // Orders_Customers_ID int  NOT NULL,
            $table->primary('Orders_ID');                                                         // PRIMARY KEY (Orders_ID),
            $table->foreign('Orders_Customers_ID')->references('Customers_ID')->on('Customers'); // FOREIGN KEY Orders_Customers (Orders_Customers_ID) REFERENCES Customers (Customers_ID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Orders');
    }
};
