<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;

     protected $primaryKey = 'idcomida';

     protected $fillable = [
         'serviciodelivery',
        'numerodecomida',
        'promocion',
        'descripcion',
    ];

     protected $guarded = [];
}

