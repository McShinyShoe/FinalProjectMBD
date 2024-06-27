<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'Orders';

    protected $primaryKey = 'Orders_ID';

    public $timestamps = false;

    protected $fillable = [
        'Orders_Days',
        'Orders_StartDate',
        'Orders_TakeDate',
        'Orders_Customers_ID',
    ];
}
