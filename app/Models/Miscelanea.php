<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miscelanea extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'existence',
        'price', 
        'description', 
        'marca'];
}

