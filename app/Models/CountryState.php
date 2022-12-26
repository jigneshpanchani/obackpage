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

    public function getCountryState($id) {
        $query = CountryState::from('country_state')
                ->where('continent_id', $id)
                ->select('country_state', 'id')
                ->get()->toArray();
        return $query;
    }

    function getstate(){

        $array=CountryState::from('country_state')
            ->select('id', 'country_state',)
            ->get()
            ->toArray();
        return $array;
    }

    public function getCountryStateMultiple($idArr){

        $query = CountryState::from('country_state')
              ->select('id', 'country_state')
              ->whereIn('continent_id', $idArr)
              ->get()
              ->toArray();
        return $query;    
    }
}
