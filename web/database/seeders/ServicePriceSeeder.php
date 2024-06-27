<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ServicePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ServicePrices')->insert([
            ['ServicePrices_Services_ID' => 1, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 7000],
            ['ServicePrices_Services_ID' => 1, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 10000],
            ['ServicePrices_Services_ID' => 2, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 8000],
            ['ServicePrices_Services_ID' => 2, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 11000],
            ['ServicePrices_Services_ID' => 3, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 5500],
            ['ServicePrices_Services_ID' => 3, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 8500],
            ['ServicePrices_Services_ID' => 4, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 7000],
            ['ServicePrices_Services_ID' => 4, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 8000],
            ['ServicePrices_Services_ID' => 5, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 10000],
            ['ServicePrices_Services_ID' => 5, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 13000],
            ['ServicePrices_Services_ID' => 6, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 13000],
            ['ServicePrices_Services_ID' => 6, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 15000],
            ['ServicePrices_Services_ID' => 7, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 15000],
            ['ServicePrices_Services_ID' => 7, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 17500],
            ['ServicePrices_Services_ID' => 8, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 30000],
            ['ServicePrices_Services_ID' => 8, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 35000],
            ['ServicePrices_Services_ID' => 9, 'ServicePrices_Days' => 1, 'ServicePrices_PricePerUnit' => 35000],
            ['ServicePrices_Services_ID' => 9, 'ServicePrices_Days' => 2, 'ServicePrices_PricePerUnit' => 50000]
        ]);
    }
}
