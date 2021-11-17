<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeknummer extends Model
{
    use HasFactory;

    protected $table = 'weeknummers';
    protected $fillable = [
        'weeknummer',
    ];
}
