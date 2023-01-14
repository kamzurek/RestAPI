<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    use HasFactory;
    Protected $fillable = ['name', 'surname', 'number', 'email', 'country', 'city', 'street', 'postcode'];
}
