<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lense extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'lens_name','sph', 'cyl','index', 'lens_option','regular_price','wholesale_price'];       
}
