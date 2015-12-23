<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    /**
     * Get the country.
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * Get the user that owns the sale.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the values for the sale.
     */
    public function values()
    {
        return $this->hasMany('App\Value');
    }
}
