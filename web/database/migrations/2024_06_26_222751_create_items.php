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
        Schema::create('Items', function (Blueprint $table) {
            $table->integer('Items_ID')->nullable(false);                                   // Items_ID int  NOT NULL,
            $table->integer('Items_Unit')->nullable(false);                                 // Items_Unit int  NOT NULL,
            $table->integer('Items_Services_ID')->nullable(false);                          // Items_Services_ID int  NOT NULL,
            $table->integer('Items_Orders_ID')->nullable(false);                            // Items_Orders_ID int  NOT NULL,
            $table->primary('Items_ID');                                                    // PRIMARY KEY (Items_ID),
            $table->foreign('Items_Services_ID')->references('Services_ID')->on('Services');                                               // FOREIGN KEY Items_Service (Items_Services_ID) REFERENCES Services (Services_ID),
            $table->foreign('Items_Orders_ID')->references('Orders_ID')->on('Orders');                                                // FOREIGN KEY Items_Orders (Items_Orders_ID) REFERENCES Orders (Orders_ID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Items');
    }
};
