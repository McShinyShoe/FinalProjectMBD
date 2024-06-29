<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePrices extends Model
{
    use HasFactory;

    protected $table = 'ServicePrices';

    protected $primaryKey = ['ServicePrices_Services_ID', 'ServicePrices_Days'];

    public $timestamps = false;

    protected $fillable = [
        'ServicePrices_Services_ID',
        'ServicePrices_Days',
        'ServicePrices_PricePerUnit',
    ];
}
