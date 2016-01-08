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
use DB;

class FullController extends Controller {
	//
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {

		//$sales = Sale::with ( 'user', 'country' )->orderBy ( 'id', 'desc' )->get ();
		$sales = Sale::with ( 'user', 'country' )->orderBy ( 'id', 'desc' );
		$flag = 0;
		
		$arr_Request = [];
		if($request ['user_id'] != null)
		{
			$arr_Request['user_id'] = $request ['user_id'];	
			$flag = 1;
			$sales = $sales->where('user_id', $arr_Request['user_id']);
		}
		else
		{
			$arr_Request['user_id'] = null;
		}			
		if($request ['customer_name'] != null)
		{
			$arr_Request['customer_name'] = $request ['customer_name'];
			$sales = $sales->where('customer_name', $arr_Request['customer_name']);
			$flag = 1;
		}
		else {
			$arr_Request['customer_name'] = null;
		}
		if($request ['country_id'] != null)
		{
			$arr_Request['country_id'] = $request ['country_id'];
			$sales = $sales->where('country_id', $arr_Request['country_id']);
			$flag = 1;
		}else {
			$arr_Request['country_id'] = null;
		}
		if($request ['region'] != null)
		{
			$arr_Request['region'] = $request ['region'];
			$sales = $sales->where('region', $arr_Request['region']);
			$flag = 1;
		}else {
			$arr_Request['region'] = null;
		}
		if($request ['vertical'] != null)
		{
			$arr_Request['vertical'] = $request ['vertical'];
			$sales = $sales->where('vertical', $arr_Request['vertical']);
			$flag = 1;
		}else {
			$arr_Request['vertical'] = null;
		}
		if($request ['delivery_location'] != null)
		{
			$arr_Request['delivery_location'] = $request ['delivery_location'];
			$sales = $sales->where('delivery_location', $arr_Request['delivery_location']);
			$flag = 1;
		}else {
			$arr_Request['delivery_location'] = null;
		}
		if($request ['engagement'] != null)
		{
			$arr_Request['engagement'] = $request ['engagement'];
			$sales = $sales->where('engagement', $arr_Request['engagement']);
			$flag = 1;
		}else {
			$arr_Request['engagement'] = null;
		}
		if($request ['service'] != null)
		{
			$arr_Request['service'] = $request ['service'];
			$sales = $sales->where('service', $arr_Request['service']);
			$flag = 1;
		}else {
			$arr_Request['service'] = null;
		}
		$currentYear = date ("Y");
		if($request ['year'] != null)
		{
			$arr_Request['year'] = $request ['year'];
			$currentYear = $arr_Request['year'];
			$flag = 1;
		}else {
			$arr_Request['year'] = null;
		}
		if($request ['q'] != null)
		{
			$arr_Request['q'] = $request ['q'];

		}else {
			$arr_Request['q'] = null;
		}
		$arr_Request['flag'] = $flag;
		$years = Sale::getYear();

		$sales = $sales->get();
		

		
		$totals = [ ];
		$hc1 = $hc2 = $hc3 = $hc4 = $hc5 = $hc6 = $hc7 = $hc8 = $hc9 = $hc10 = $hc11 = $hc12 = 0;
		$v1 = $v2 = $v3 = $v4 = $v5 = $v6 = $v7 = $v8 = $v9 = $v10 = $v11 = $v12 = 0;
		
		$total_hc = 0;
		$total_value = 0;
		foreach ( $sales as $key => $sale ) {
			$total_hc += $sale->head_count;
			$total_value += $sale->value;
			$value = [];
			if($request ['q'] != null && $request ['q'] == 'full')
			{
				$value = Sale::makeFullValue ( $sale, $currentYear );
			}elseif($request ['q'] != null && $request ['q'] == 'weighted')
			{
				$value = Sale::makeWeightedValue ( $sale, $currentYear );
			}else {
				$value = Sale::makeFullValue ( $sale, $currentYear );
			}
			
			$total_val_hc = $total_val_value = 0;
			foreach($value as $val)
			{
				$total_val_hc += $val['hc'];
				$total_val_value += $val['value'];
				
			}
			if($total_val_hc == 0 && $total_val_value == 0)
			{
				unset($sales[$key]);
				$sale->success = false;
			}
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
		
		$users = User::all ();
		$countries = Country::all ();
		$customerNames = Sale::getCustomerName();
		return view ( 'fulls.index' )->with ( 'sales', $sales )->with ( 'totals', $totals )->with('years', $years)->with ( 'users', $users )->with ( 'countries', $countries )->with('arr_Request', $arr_Request)->with('customerNames', $customerNames)->with('total_hc',$total_hc)->with('total_value',$total_value);
	}
	
}
