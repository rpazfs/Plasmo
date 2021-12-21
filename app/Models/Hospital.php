<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = 'hospital';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'address',
        'hotline',
    ];
}