<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restringidos extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'existence',
        'price', 
        'description', 
        'marca', 
        'medichome', 
        'compuesactive'];
}

