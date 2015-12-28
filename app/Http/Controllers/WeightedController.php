<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

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

        	$sale->w_jan_hc = ($sale->jan_hc)*($sale->probability/100);
        	$sale->w_jan_val = ($sale->jan_val)*($sale->probability/100);
        	
        	$sale->w_feb_hc = ($sale->feb_hc)*($sale->probability/100);
        	$sale->w_feb_val = ($sale->feb_val)*($sale->probability/100);
        	
        	$sale->w_mar_hc = ($sale->mar_hc)*($sale->probability/100);
        	$sale->w_mar_val = ($sale->mar_val)*($sale->probability/100);
        	
        	$sale->w_apr_hc = ($sale->apr_hc)*($sale->probability/100);
        	$sale->w_apr_val = ($sale->apr_val)*($sale->probability/100);
        	
        	$sale->w_may_hc = ($sale->may_hc)*($sale->probability/100);
        	$sale->w_may_val = ($sale->may_val)*($sale->probability/100);
        	
        	$sale->w_jun_hc = ($sale->jun_hc)*($sale->probability/100);
        	$sale->w_jun_val = ($sale->jun_val)*($sale->probability/100);
        	
        	$sale->w_jul_hc = ($sale->jul_hc)*($sale->probability/100);
        	$sale->w_jul_val = ($sale->jul_val)*($sale->probability/100);
        	
        	$sale->w_aug_hc = ($sale->aug_hc)*($sale->probability/100);
        	$sale->w_aug_val = ($sale->aug_val)*($sale->probability/100);
        	
        	$sale->w_sep_hc = ($sale->sep_hc)*($sale->probability/100);
        	$sale->w_sep_val = ($sale->sep_val)*($sale->probability/100);
        	
        	$sale->w_oct_hc = ($sale->oct_hc)*($sale->probability/100);
        	$sale->w_oct_val = ($sale->oct_val)*($sale->probability/100);
        	
        	$sale->w_nov_hc = ($sale->nov_hc)*($sale->probability/100);
        	$sale->w_nov_val = ($sale->nov_val)*($sale->probability/100);
        	
        	$sale->w_dec_hc = ($sale->dec_hc)*($sale->probability/100);
        	$sale->w_dec_val = ($sale->dec_val)*($sale->probability/100);
        	
            $sale->load('values');
        }

        return view('weighted.index')->with('sales', $sales)->with('a', $a);
    }
}
