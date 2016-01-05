<?php

namespace App;
use Carbon\Carbon;
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
    static function makeFullValue($sale)
    {
		$currentYear = date ( "Y" );
		$startMonth = Carbon::parse ( $sale->started_at )->month;
		$startYear = Carbon::parse ( $sale->started_at )->year;
		
		$values = [ ];
		
		if ($currentYear == $startYear) {
			
			for($i = 1; $i <= 12; $i ++) {
				
				if ($i < $startMonth) {
					array_push ( $values, array (
							'hc' => 0,
							'value' => 0 
					) );
				} else {
					array_push ( $values, array (
							'hc' => $sale->head_count / $sale->duration ,
							'value' => $sale->value / $sale->duration
						
					) );
				}
			}
		} else {
			for($i = 1; $i <= 12; $i ++) {
				array_push ( $values, array (
						'hc' => 0,
						'value' => 0 
				) );
			}
		}
		
		return $values;
    }
    static function makeWeightedValue($sale)
    {
    	$currentYear = date ( "Y" );
    	$startMonth = Carbon::parse ( $sale->started_at )->month;
    	$startYear = Carbon::parse ( $sale->started_at )->year;
    
    	$values = [ ];
    
    	if ($currentYear == $startYear) {
    			
    		for($i = 1; $i <= 12; $i ++) {
    
    			if ($i < $startMonth) {
    				array_push ( $values, array (
    				'hc' => 0,
    				'value' => 0
    				) );
    			} else {
    				array_push ( $values, array (
    				'hc' => ($sale->head_count / $sale->duration)*($sale->probability/100) ,
    				'value' => ($sale->value / $sale->duration)*($sale->probability/100)
    
    				) );
    			}
    		}
    	} else {
    		for($i = 1; $i <= 12; $i ++) {
    			array_push ( $values, array (
    			'hc' => 0,
    			'value' => 0
    			) );
    		}
    	}
    
    	return $values;
    }
}
