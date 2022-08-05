<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brach extends Model
{
    use HasFactory;

    protected $table = 'braches';

    protected $fillable = [
        'name',
        'km'
    ];
}
