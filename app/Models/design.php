<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class design extends Model
{
    use HasFactory;

    protected $table = 'design';

    protected $fillable = [
        'name',
        'image',
        'description',
    ];
}