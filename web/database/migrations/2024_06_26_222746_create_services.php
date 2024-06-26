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
        Schema::create('Services', function (Blueprint $table) {
            $table->integer('Services_ID')->nullable(false);          // Services_ID int  NOT NULL,
            $table->string('Services_Name', 32)->nullable(false);     // Services_Name varchar(32)  NOT NULL,
            $table->string('Services_UnitType', 16)->nullable(false); // Services_UnitType varchar(16)  NOT NULL,
            $table->primary('Services_ID');                           // PRIMARY KEY (Services_ID)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Services');
    }
};
