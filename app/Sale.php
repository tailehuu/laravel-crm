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
    static function makeHcValue($data)
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
		
		$values = [ ];
		
    	$months = Sale::getMonthInYear( $sale->started_at,  $sale->duration, $currentYear);

			for($i = 1; $i <= 12; $i ++) {
				if (in_array($i, $months))
				{
					array_push ( $values, array (
					'hc' => $sale->head_count / $sale->duration ,
					'value' => $sale->value / $sale->duration
					
					) );
				}
				else {
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
    	 
    	for($i = 1; $i <= 12; $i ++) {
    		if (in_array($i, $months))
    		{
    			array_push ( $values, array (
    			'hc' => ($sale->head_count / $sale->duration)*($sale->probability/100) ,
    			'value' => ($sale->value / $sale->duration)*($sale->probability/100)
    
    			) );
    		}
    		else {
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

    	for($i = 0; $i < $duration; $i++)
    	{
    		$checkYear = Carbon::parse ( $start )->addMonth($i)->year;
    		$month = Carbon::parse ( $start )->addMonth($i)->month;
     		if($checkYear == $year)
     		{
    			array_push($months, $month);
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
