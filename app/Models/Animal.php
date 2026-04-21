<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     */
    protected $table = 'animals';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'species',
        'age',
        'habitat',
    ];

    /**
     * Attribute casting.
     */
    protected $casts = [
        'age' => 'integer',
    ];
}