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

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::with('user', 'country')->get();
		
        foreach($sales as $sale) {
            $sale->load('values');
        }
       
        return view('sales.index')->with('sales', $sales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $users = User::all();
		$countries = Country::all();
		
    	return view('sales.create')->with('users', $users)->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    	$data['user_id'] = $request['user_id'];
		$data['country_id'] = $request['country_id'];
		$data['customer_name'] = $request['customer_name'];
		$data['duration'] = $request['duration'];
		$data['engagement'] = $request['engagement'];
		$data['head_count'] = $request['head_count'];
		$data['opportunity_name'] = $request['opportunity_name'];
        $data['probability'] = $request['probability'];
		$data['region'] = $request['region'];
		$data['started_at'] = date( 'Y-m-d H:i:s', strtotime($request['started_at']) );
		$data['value'] = $request['value'];
		
// 		$data['jan_hc'] = $request['jan_hc'];
// 		$data['jan_val'] = $request['jan_val'];
// 		$data['feb_hc'] = $request['feb_hc'];
// 		$data['feb_val'] = $request['feb_val'];
// 		$data['mar_hc'] = $request['mar_hc'];
// 		$data['mar_val'] = $request['mar_val'];
// 		$data['apr_hc'] = $request['apr_hc'];
// 		$data['apr_val'] = $request['apr_val'];
// 		$data['may_hc'] = $request['may_hc'];
// 		$data['may_val'] = $request['may_val'];
// 		$data['jun_hc'] = $request['jun_hc'];
// 		$data['jun_val'] = $request['jun_val'];
// 		$data['jul_hc'] = $request['jul_hc'];
// 		$data['jul_val'] = $request['jul_val'];
// 		$data['aug_hc'] = $request['aug_hc'];
// 		$data['aug_val'] = $request['aug_val'];
// 		$data['sep_val'] = $request['sep_val'];
// 		$data['sep_hc'] = $request['sep_hc'];
// 		$data['oct_val'] = $request['oct_val'];
// 		$data['oct_hc'] = $request['oct_hc'];
// 		$data['nov_val'] = $request['nov_val'];
// 		$data['nov_hc'] = $request['nov_hc'];
// 		$data['dec_val'] = $request['dec_val'];
// 		$data['dec_hc'] = $request['dec_hc'];
       

    	$sale = Sale::insert($data);


    	
    	
        // redirect
        //Session::flash('message', 'Successfully created the sale!');
        $sales = Sale::with('user', 'country')->get();

        foreach($sales as $sale) {
            $sale->load('values');
        }

        return view('sales.index')->with('sales', $sales);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->load('user', 'country');
        
        $sale->hc_month = $this->makeFullValue($sale);

        return view('sales.show')->with('sale', $sale);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->load('user', 'country');
        $users = User::all();
        $countries = Country::all();

        return view('sales.edit')->with('sale', $sale)->with('users',$users)->with('countries',$countries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sale = Sale::findOrFail($id);

        $sale->user_id = $request['user_id'];
        $sale->country_id = $request['country_id'];
        $sale->customer_name = $request['customer_name'];
        $sale->duration = $request['duration'];
        $sale->engagement = $request['engagement'];
        $sale->head_count = $request['head_count'];
        $sale->opportunity_name = $request['opportunity_name'];
        $sale->probability = $request['probability'];
        $sale->region = $request['region'];
        $sale->started_at = date( 'Y-m-d H:i:s', strtotime($request['started_at']) );
        $sale->value = $request['value'];
        
//         $sale->jan_hc = $request['jan_hc'];
//         $sale->jan_val = $request['jan_val'];
//         $sale->feb_hc = $request['feb_hc'];
//         $sale->feb_val = $request['feb_val'];
//         $sale->mar_hc = $request['mar_hc'];
//         $sale->mar_val = $request['mar_val'];
//         $sale->apr_hc = $request['apr_hc'];
//         $sale->apr_val = $request['apr_val'];
//         $sale->may_hc = $request['may_hc'];
//         $sale->may_val = $request['may_val'];
//         $sale->jun_hc = $request['jun_hc'];
//         $sale->jun_val = $request['jun_val'];
//         $sale->jul_hc = $request['jul_hc'];
//         $sale->jul_val = $request['jul_val'];
//         $sale->aug_hc = $request['aug_hc'];
//         $sale->aug_val = $request['aug_val'];
//         $sale->sep_val = $request['sep_val'];
//         $sale->sep_hc = $request['sep_hc'];
//         $sale->oct_val = $request['oct_val'];
//         $sale->oct_hc = $request['oct_hc'];
//         $sale->nov_val = $request['nov_val'];
//         $sale->nov_hc = $request['nov_hc'];
//         $sale->dec_val = $request['dec_val'];
//         $sale->dec_hc = $request['dec_hc'];


        $sale->save();
       // $sale->update($request->all());

        // redirect
       // Session::flash('message', 'Successfully updated the sale!');
        return Redirect::to('sale');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->delete();

        // redirect
       // Session::flash('message', 'Successfully deleted the sale!');
        return Redirect::to('sale');
    }
    public function makeFullValue($sale)
    {
    	$data = [];
    	for($i = 0; $i < $sale->duration; $i++)
    	{
    		
    	$data[$i]['hc'] = round(($sale->head_count / $sale->duration), 2);
    	$data[$i]['value'] = round(($sale->value / $sale->duration), 2);
    	$data[$i]['date'] = Carbon::parse($sale->started_at)->addMonth($i)->toDateString();;
    	}
    	return $data;
    	}
    
}
