<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'Customers';

    protected $primaryKey = 'Customers_ID';

    public $timestamps = false;

    protected $fillable = [
        'Customers_Name',
        'Customers_EMail',
        'Customers_PhoneNumber',
        'Customers_Address',
    ];
}
