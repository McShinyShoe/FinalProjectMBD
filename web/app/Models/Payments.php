<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;

    protected $table = 'Payments';

    protected $primaryKey = 'Payments_ID';

    public $timestamps = false;

    protected $fillable = [
        'Payments_Amount',
        'Orders_Orders_ID',
    ];
}
