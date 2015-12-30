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

class FullController extends Controller
{
    //
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$sales = Sale::with('user', 'country')->orderBy('id', 'desc')->get();
	
		foreach($sales as $sale) {
			$sale->load('values');
		}
		 
		return view('fulls.index')->with('sales', $sales);
	}
}
