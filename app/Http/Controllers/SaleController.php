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

class SaleController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		
		$sales = Sale::with ( 'user', 'country' )->orderBy ( 'id', 'desc' )->get ();
		
		foreach ( $sales as $sale ) {
			$sale->load ( 'values' );
		}
		
		return view ( 'sales.index' )->with ( 'sales', $sales );
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
		$data ['user_id'] = $request ['user_id'];
		$data ['country_id'] = $request ['country_id'];
		$data ['customer_name'] = $request ['customer_name'];
		$data ['duration'] = $request ['duration'];
		$data ['engagement'] = $request ['engagement'];
		$data ['head_count'] = $request ['head_count'];
		$data ['opportunity_name'] = $request ['opportunity_name'];
		$data ['probability'] = $request ['probability'];
		$data ['region'] = $request ['region'];
		$data ['started_at'] = date ( 'Y-m-d H:i:s', strtotime ( $request ['started_at'] ) );
		$data ['value'] = $request ['value'];
		$data ['service'] = $request ['service'];
		
		$sale = Sale::insert ( $data );
		
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
		
		$sale->hc_month = Sale::makeFullValue ( $sale );
		
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
		$sale->load ( 'user', 'country' );
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
		$sale->duration = $request ['duration'];
		$sale->engagement = $request ['engagement'];
		$sale->head_count = $request ['head_count'];
		$sale->opportunity_name = $request ['opportunity_name'];
		$sale->probability = $request ['probability'];
		$sale->region = $request ['region'];
		$sale->started_at = date ( 'Y-m-d H:i:s', strtotime ( $request ['started_at'] ) );
		$sale->value = $request ['value'];
		$sale->service = $request ['service'];
		
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
