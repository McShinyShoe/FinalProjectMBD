<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    // Services_ID int  NOT NULL,
    // Services_Name varchar(32)  NOT NULL,
    // Services_UnitType varchar(16)  NOT NULL,
    // PRIMARY KEY (Services_ID)
    public function run(): void
    {
        DB::table('Services')->insert([
            ['Services_ID' => 0, 'Services_Name' => 'Cuci Kering', 'Services_UnitType' => 'Berat'],
            ['Services_ID' => 1, 'Services_Name' => 'Cuci Setrika', 'Services_UnitType' => 'Berat'],
            ['Services_ID' => 2, 'Services_Name' => 'Jasa Setrika', 'Services_UnitType' => 'Berat'],
            ['Services_ID' => 3, 'Services_Name' => 'Sprei Kecil', 'Services_UnitType' => 'Satuan'],
            ['Services_ID' => 4, 'Services_Name' => 'Sprei Besar', 'Services_UnitType' => 'Satuan'],
            ['Services_ID' => 5, 'Services_Name' => 'Selimut Tipis', 'Services_UnitType' => 'Satuan'],
            ['Services_ID' => 6, 'Services_Name' => 'Selimut Tebal', 'Services_UnitType' => 'Satuan'],
            ['Services_ID' => 7, 'Services_Name' => 'Bed Cover Queen', 'Services_UnitType' => 'Satuan'],
            ['Services_ID' => 8, 'Services_Name' => 'Bed Cover King', 'Services_UnitType' => 'Satuan'],
        ]);
    }
}
