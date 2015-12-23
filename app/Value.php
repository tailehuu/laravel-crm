<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    /**
     * Get the sale that owns the value.
     */
    public function sale()
    {
        return $this->belongsTo('App\Sale');
    }
}
