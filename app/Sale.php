<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use DB;

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
    static function makeHcValue($data, $sale_id)
    {
    	$hc = $data['head_count']/$data['duration'];
    	$value = $data['value']/$data['duration'];
    	for($i = 1; $i <= $data['duration']; $i++)
    	{
    		DB::table ( 'values' )->insert ( [
    		'head_count' => $hc,
    		'value' => $value,
    		'month' => $i,
    		'sale_id' => $sale_id
    		] );
    		
    	}

    }
    static function makeFullValue($sale, $year)
    {
		$currentYear = $year;
		$startMonth = Carbon::parse ( $sale->started_at )->month;
		$startYear = Carbon::parse ( $sale->started_at )->year;
		
		$endMonth = Carbon::parse ( $sale->started_at )->addMonth($sale->duration -1)->month;
		$endYear = Carbon::parse ( $sale->started_at )->addMonth($sale->duration -1)->year;
		
		$values = [];
		
		

    	$months = Sale::getMonthInYear( $sale->started_at,  $sale->duration, $currentYear);

    	
    	$val = $sale->values;
    	if(count($val) > 0){
    		for($i = 1; $i <= 12; $i++) {
    		
    			if (in_array($i, $months['val']))
    			{
    				$keySearch = array_search($i,$months['val']);
    				$position = $months['pos'][$keySearch];
    		
    				array_push ( $values, array (
    				'hc' => $val[$position]->head_count ,
    				'value' => $val[$position]->value
    					
    				) );
    			}
    			else {
    				array_push ( $values, array (
    				'hc' => 0,
    				'value' => 0
    				) );
    			}
    		
    		}
    	}
    	else {
    		for($i = 1; $i <= 12; $i++) {
    		
    			array_push ( $values, array (
    				'hc' => 0,
    				'value' => 0
    				) );    		
    		}
    	}
			
		return $values;
    }
    static function makeWeightedValue($sale, $year)
    {
    	$currentYear = $year;
    	$startMonth = Carbon::parse ( $sale->started_at )->month;
    	$startYear = Carbon::parse ( $sale->started_at )->year;
    	
    	$endMonth = Carbon::parse ( $sale->started_at )->addMonth($sale->duration -1)->month;
    	$endYear = Carbon::parse ( $sale->started_at )->addMonth($sale->duration -1)->year;
    	
    	$values = [ ];
    
    	$months = Sale::getMonthInYear( $sale->started_at,  $sale->duration, $currentYear);
    	 

    	$val = $sale->values;
    	if(count($val) > 0){
    		for($i = 1; $i <= 12; $i++) {
    	
    			if (in_array($i, $months['val']))
    			{
    				$keySearch = array_search($i,$months['val']);
    				$position = $months['pos'][$keySearch];
    	
    				array_push ( $values, array (
    				'hc' => ($val[$position]->head_count)*($sale->probability/100) ,
    				'value' => ($val[$position]->value)*($sale->probability/100)
    					
    				) );
    			}
    			else {
    				array_push ( $values, array (
    				'hc' => 0,
    				'value' => 0
    				) );
    			}
    	
    		}
    	}
    	else {
    		for($i = 1; $i <= 12; $i++) {
    	
    			array_push ( $values, array (
    			'hc' => 0,
    			'value' => 0
    			) );
    		}
    	}
    	 
    	 
    
    	return $values;
    }
    static function getMonthInYear($start, $duration, $year)
    {
    	$months = [];
    	$months['val'] = [];
    	$months['pos'] = [];
    	for($i = 0; $i < $duration; $i++)
    	{
    		$checkYear = Carbon::parse ( $start )->addMonth($i)->year;
    		$month = Carbon::parse ( $start )->addMonth($i)->month;
     		if($checkYear == $year)
     		{
    			array_push($months['val'], $month);
    			array_push($months['pos'], $i);
     		}
    		
    	}
    	return $months;
    }
    static function getYear()
    {
    	$currentYear = date ("Y");
    	$start_year = $currentYear - 5;
    	$end_year = $currentYear + 2;
    	$years = [];
    	
    	for($i = $end_year; $i >= $start_year; $i--)
    	{
    	array_push($years,$i);
    	}
    	
    	return $years;
    }
    
    static function getCustomerName(){
    	$customerNames = Sale::select('customer_name')->distinct()->groupBy('customer_name')->get();
    	return $customerNames;
    }
}
