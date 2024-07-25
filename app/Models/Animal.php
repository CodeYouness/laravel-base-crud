<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'common_name',
        'scientific_name',
        'habitat',
        'class',
        'family',
        'average_life',
        'average_weight',
        'image'
    ];
}