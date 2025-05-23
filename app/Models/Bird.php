<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bird extends Model
{
    use HasFactory;

    protected $fillable = [
        'bird_count',
        'notes',
    ];
}