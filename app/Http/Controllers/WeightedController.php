<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WeightedController extends Controller
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
}
