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
            $sale->load('values');
        }

        return view('weighted.index')->with('sales', $sales)->with('a', $a);
    }
}
