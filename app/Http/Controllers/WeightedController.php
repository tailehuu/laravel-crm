<?php

namespace App\Http\Controllers;


use App\Sale;
use App\Country;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class WeightedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
    public function index()
    {

       $sales = Sale::with('user', 'country')->orderBy('id', 'desc')->get();
	
		foreach($sales as $sale) {
			$value = Sale::makeWeightedValue($sale);
			$sale->months = $value;
			//$sale->load('values');
		}
		 
		return view('weighted.index')->with('sales', $sales);
    }

}
