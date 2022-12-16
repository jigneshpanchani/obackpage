<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CountryState;
use App\Models\City;

class Continents extends Model
{
    use HasFactory;
    protected $table = 'continents';

    protected $fillable = [
        'id', 'continent'
    ];

    public function getContinents() {

        $country_array = array();

        $array = Continents::select('continents.continent', 'continents.id')
            ->pluck('continents.continent', 'continents.id')
            ->toArray();

            foreach($array as $key => $arr) {

                $array_state = CountryState::select('country_state.country_state', 'country_state.id')
                    ->where('country_state.continent_id', '=', $key)
                    ->get()
                    ->toArray();

                foreach($array_state as $key_1 => $arr_1) {

                    $array_state[$key_1]['city'] = City::select('city.city', 'city.id')
                        ->where('city.country_state_id', '=', $arr_1['id'])
                        ->get()
                        ->toArray();

                }

                $country_array [] = array (
                    'id'    => $key,
                    'continent'    => $arr,
                    'state' =>  $array_state
                );
            }

        return $country_array;

    }

    function getCountry(){

        $array=continents::from('continents')
            ->select('id', 'continent',)
            ->get()
            ->toArray();
        return $array;
    }

    public function getCountryState($id) {
        $query = CountryState::from('country_state')
                ->where('id', $id)
                ->select('country_state', 'id')
                ->get()->toArray();
        return $query;
    }

}
