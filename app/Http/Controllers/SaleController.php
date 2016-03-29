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
use Validator;
use DB;

class SaleController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		$sales = Sale::with ( 'user', 'country' )->orderBy ( 'id', 'desc' )->get ();
		$total_hc = 0;
		$total_value = 0;
		foreach ( $sales as $sale ) {
			$total_hc += $sale->head_count;
			$total_value += $sale->value;
			
			$sale->load ( 'values' );
		}

		return view ( 'sales.index' )->with ( 'sales', $sales )->with('total_hc',$total_hc)->with('total_value',$total_value);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$users = User::all ();
		$countries = Country::all ();
		return view ( 'sales.create' )->with ( 'users', $users )->with ( 'countries', $countries );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		$validator = Validator::make($request->all(), [
				//'title' => 'required|unique:posts|max:255',
				'customer_name' => 'required',
		]);
		
		if ($validator->fails()) {
			
			echo "loi";
			return;
		}
		
		
		$data ['user_id'] = $request ['user_id'];
		$data ['country_id'] = $request ['country_id'];
		$data ['customer_name'] = $request ['customer_name'];
		$data ['duration'] = $request ['duration'];
		$data ['engagement'] = $request ['engagement'];
		$data ['head_count'] = $request ['head_count'];
		$data ['opportunity_name'] = $request ['opportunity_name'];
		$data ['opportunity_type'] = $request ['opportunity_type'];
		$data ['probability'] = $request ['probability'];
		$data ['closure_date'] = date ( 'Y-m-d H:i:s', strtotime ( $request ['closure_date'] ) );
		$data ['region'] = $request ['region'];
		$data ['vertical'] = $request ['vertical'];
		$data ['delivery_location'] = $request ['delivery_location'];
		$data ['started_at'] = date ( 'Y-m-d H:i:s', strtotime ( $request ['started_at'] ) );
		$data ['value'] = $request ['value'];
		$data ['service'] = $request ['service'];
		$data ['description'] = $request ['description'];

		//$sale = Sale::insert ( $data );
		// insert and make value and head count per month
		$id = DB::table('sales')->insertGetId($data);
		Sale::makeHcValue( $data, $id );
		
		// redirect
		// Session::flash('message', 'Successfully created the sale!');
		$sales = Sale::with ( 'user', 'country' )->get ();	
		
		
		foreach ( $sales as $sale ) {
			$sale->load ( 'values' );
		}		
		return redirect ( 'sale');
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$sale = Sale::findOrFail ( $id );
		$sale->load ( 'user', 'country' );
		
		//$sale->hc_month = Sale::makeFullValue ( $sale );
		
		return view ( 'sales.show' )->with ( 'sale', $sale );
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$sale = Sale::findOrFail ( $id );
		$sale->load ( 'user', 'country', 'values' );
		$users = User::all ();
		$countries = Country::all ();

		return view ( 'sales.edit' )->with ( 'sale', $sale )->with ( 'users', $users )->with ( 'countries', $countries );
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request        	
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$sale = Sale::findOrFail ( $id );
		
		$sale->user_id = $request ['user_id'];
		$sale->country_id = $request ['country_id'];
		$sale->customer_name = $request ['customer_name'];
		if($sale->probability != 100)
		{
			$sale->duration = $request ['duration'];
		}
		if($sale->probability == 100 && $sale->engagement == 1)
		{			
			if($request ['hc1'] != null)
			{
				DB::table('values')->where('sale_id', '=', $id)->delete();
				for($i = 1; $i <= $sale->duration; $i++)
				{
				DB::table ( 'values' )->insert ( [
				'head_count' => $request ['hc'.$i],
				'value' => $request ['value'.$i],
				'month' => Carbon::parse ( $request['started_at'] )->addMonth($i-1),
				'sale_id' => $id
				] );
				}
			}
			
							
		}
			
		$sale->engagement = $request ['engagement'];
		$sale->head_count = $request ['head_count'];
		$sale->opportunity_name = $request ['opportunity_name'];
		$sale->opportunity_type = $request ['opportunity_type'];
		$sale->probability = $request ['probability'];
		$sale->closure_date = date ( 'Y-m-d H:i:s', strtotime ( $request ['closure_date'] ) );		
		$sale->region = $request ['region'];
		$sale->vertical = $request ['vertical'];
		$sale->delivery_location = $request ['delivery_location'];		
		$sale->started_at = date ( 'Y-m-d H:i:s', strtotime ( $request ['started_at'] ) );
		$sale->value = $request ['value'];
		$sale->service = $request ['service'];
		$sale->description = $request ['description'];

		
		echo $sale;
		
		$sale->save ();
		// $sale->update($request->all());
		
		// redirect
		// Session::flash('message', 'Successfully updated the sale!');
		return Redirect::to ( 'sale' );
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$sale = Sale::findOrFail ( $id );
		$sale->delete ();
		
		// redirect
		// Session::flash('message', 'Successfully deleted the sale!');
		return Redirect::to ( 'sale' );
	}
}
