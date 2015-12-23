<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Get the sales for the country.
     */
    public function sales()
    {
        return $this->hasMany('App\Sale');
    }
}
