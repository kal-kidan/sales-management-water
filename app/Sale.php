<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['name', 'volume', 'packet', 'quantity', 'price', 'total',  'created_at', 'updated_at'];
}
