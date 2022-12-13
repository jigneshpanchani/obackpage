<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryState extends Model
{
    use HasFactory;
    protected $table = 'country_state';

    protected $fillable = [
        'id', 'continent_id', 'country_state'
    ];
}
