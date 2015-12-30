<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class WeightedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function index()
    {

        $a = Route::getFacadeRoot()->current()->uri();
        $sales = Sale::with('user', 'country')->get();

        foreach($sales as $sale) {
        	
        	
        
        	
            $sale->load('values');
        }

        return view('weighted.index')->with('sales', $sales)->with('a', $a);
    }
    
    public function show($id)
    {
    	$sale = Sale::findOrFail($id);
    	$sale->hc_month = $this->makeWeightValue($sale);
    	$sale->load('user', 'country');
    	
    	return view('weighted.show')->with('sale', $sale);
    
    
    }
    public function makeWeightValue($sale)
    {
    	$data = [];
    	for($i = 0; $i < $sale->duration; $i++)
    	{
    	$data[$i]['hc'] = round(($sale->head_count / $sale->duration)* ($sale->probability/100), 2);
    	$data[$i]['value'] = round(($sale->value / $sale->duration)* ($sale->probability/100), 2);
    	$data[$i]['date'] = Carbon::parse($sale->started_at)->addMonth($i)->toDateString();;
    	}
    	return $data;
    	}
}
