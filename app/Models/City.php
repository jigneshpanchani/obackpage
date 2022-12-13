<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'city';

    protected $fillable = [
        'id', 'continent_id', 'country_state_id', 'city'
    ];

    public function getNearByCities($id) {

        $getCountryStateId = City::where('city.id', $id)->select('country_state_id')->get()->toArray();

        $countryStateId = $getCountryStateId[0]['country_state_id'];

        $getNearByCities = City::where('city.country_state_id', $countryStateId)->select('id', 'city')->get()->toArray();

        return $getNearByCities;

    }
}
