<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'Items';

    protected $primaryKey = 'Items_ID';

    public $timestamps = false;

    protected $fillable = [
        'Items_Unit',
        'Items_Services_ID',
        'Items_Orders_ID',
    ];
}
