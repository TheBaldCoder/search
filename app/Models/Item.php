<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'customer',
        'purchase_date',
        'delivered',
    ];


    // This way you can "format()" the property inside the view.
    protected $casts = [
        'purchase_date' => 'datetime'
    ];
}
