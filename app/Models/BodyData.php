<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class BodyData extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'body_data';

    protected $fillable = [
        'user_id',
        'berat',
        'tinggi',
        'umur',
        'jenis_kelamin',
        'aktivitas'
    ];
}