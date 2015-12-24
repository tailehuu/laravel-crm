<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = Sale::insert($request);

        // redirect
        Session::flash('message', 'Successfully created the sale!');
        return Redirect::to('sale');
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

        return view('sales.edit')->with('sale', $sale);
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
        $sale->update($request->all());

        // redirect
        Session::flash('message', 'Successfully updated the sale!');
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
        Session::flash('message', 'Successfully deleted the sale!');
        return Redirect::to('sale');
    }
}
