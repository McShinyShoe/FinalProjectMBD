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
        Schema::create('ServicePrices', function (Blueprint $table) {
            $table->integer('ServicePrices_Services_ID')->nullable(false);                 // ServicePrices_Services_ID int  NOT NULL,
            $table->integer('ServicePrices_Days')->nullable(false);                        // ServicePrices_Days int  NOT NULL,
            $table->decimal('ServicePrices_PricePerUnit', 8, 2)->nullable(false);          // ServicePrices_PricePerUnit decimal(8,2)  NOT NULL,
            $table->primary(['ServicePrices_Services_ID', 'ServicePrices_Days']);                                         // PRIMARY KEY (ServicePrices_Services_ID,ServicePrices_Days),
            $table->foreign('ServicePrices_Services_ID')->references('Services_ID')->on('Services');                                      // FOREIGN KEY ServicePrices_Service (ServicePrices_Services_ID) REFERENCES Services (Services_ID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ServicePrices');
    }
};
