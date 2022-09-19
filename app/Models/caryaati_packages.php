<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caryaati_packages extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_name','monthly_price','yearly_price','no_of_cars'
    ];
}
