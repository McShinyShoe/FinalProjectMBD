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
        Schema::create('Customers', function (Blueprint $table) {
            $table->integer('Customers_ID')->nullable(false);             // Customers_ID int  NOT NULL,
            $table->string('Customers_Name', 32)->nullable(false);        // Customers_Name varchar(32)  NOT NULL,
            $table->string('Customers_EMail', 256)->nullable(false); // Customers_PhoneNumber varchar(15)  NOT NULL,
            $table->string('Customers_PhoneNumber', 15)->nullable(false); // Customers_PhoneNumber varchar(15)  NOT NULL,
            $table->string('Customers_Address', 255)->nullable(true);    // Customers_Address varchar(255)  NULL,
            $table->primary('Customers_ID');                              // PRIMARY KEY (Customers_ID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Customers');
    }
};
