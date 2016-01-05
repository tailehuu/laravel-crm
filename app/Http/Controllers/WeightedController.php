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
		
       $totals = [];
       $hc1 = $hc2 = $hc3 = $hc4 = $hc5 = $hc6 = $hc7 = $hc8 = $hc9 = $hc10 = $hc11 = $hc12 = 0;
       $v1 = $v2 = $v3 = $v4 = $v5 = $v6 = $v7 = $v8 = $v9 = $v10 = $v11 = $v12 = 0;
       
		foreach($sales as $sale) {
			$value = Sale::makeWeightedValue($sale);
			$sale->months = $value;
			
			$hc1 += $sale->months [0] ['hc'];
			$hc2 += $sale->months [1] ['hc'];
			$hc3 += $sale->months [2] ['hc'];
			$hc4 += $sale->months [3] ['hc'];
			$hc5 += $sale->months [4] ['hc'];
			$hc6 += $sale->months [5] ['hc'];
			$hc7 += $sale->months [6] ['hc'];
			$hc8 += $sale->months [7] ['hc'];
			$hc9 += $sale->months [8] ['hc'];
			$hc10 += $sale->months [9] ['hc'];
			$hc11 += $sale->months [10] ['hc'];
			$hc12 += $sale->months [11] ['hc'];
			$v1 += $sale->months [0] ['value'];
			$v2 += $sale->months [1] ['value'];
			$v3 += $sale->months [2] ['value'];
			$v4 += $sale->months [3] ['value'];
			$v5 += $sale->months [4] ['value'];
			$v6 += $sale->months [5] ['value'];
			$v7 += $sale->months [6] ['value'];
			$v8 += $sale->months [7] ['value'];
			$v9 += $sale->months [8] ['value'];
			$v10 += $sale->months [9] ['value'];
			$v11 += $sale->months [10] ['value'];
			$v12 += $sale->months [11] ['value'];
			
		}
		array_push ( $totals, array (
		'hc' => $hc1,
		'value' => $v1
		) );
		array_push ( $totals, array (
		'hc' => $hc2,
		'value' => $v2
		) );
		array_push ( $totals, array (
		'hc' => $hc3,
		'value' => $v3
		) );
		array_push ( $totals, array (
		'hc' => $hc4,
		'value' => $v4
		) );
		array_push ( $totals, array (
		'hc' => $hc5,
		'value' => $v5
		) );
		array_push ( $totals, array (
		'hc' => $hc6,
		'value' => $v6
		) );
		array_push ( $totals, array (
		'hc' => $hc7,
		'value' => $v7
		) );
		array_push ( $totals, array (
		'hc' => $hc8,
		'value' => $v8
		) );
		array_push ( $totals, array (
		'hc' => $hc9,
		'value' => $v9
		) );
		array_push ( $totals, array (
		'hc' => $hc10,
		'value' => $v10
		) );
		array_push ( $totals, array (
		'hc' => $hc11,
		'value' => $v11
		) );
		array_push ( $totals, array (
		'hc' => $hc12,
		'value' => $v12
		) );
		 
		return view('weighted.index')->with('sales', $sales)->with ( 'totals', $totals );
    }

}
