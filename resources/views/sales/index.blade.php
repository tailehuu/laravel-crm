@extends('layouts.master')

@section('title', 'Sale')

@section('content')
    <h1 class="page-header">Full Value</h1>
    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam.
        Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id
        elit.</p>
<div class="table-responsive">
                        <table
                            class="table table-condensed table-striped table-bordered table-hover no-margin">
                            <thead>
                                <tr>
    
                                <th rowspan="2">No</th>
                                    <th rowspan="2">Salea Person</th>
                                    <th rowspan="2">Prospect/ Customer Name</th>
                                    <th rowspan="2">Country</th>
                                    <th rowspan="2">Region</th>
                                    <th rowspan="2">Opportunity Name</th>
                                    <th rowspan="2">Engagement Type</th>
                                    <th rowspan="2">Service Type</th>
                                    <th colspan="2">Total</th>
                                    <th rowspan="2">Duration (month)</th>
                                    <th rowspan="2">Probability %</th>
                                    <th rowspan="2">Start Date</th>
            
                                    
                                    
                                    <th colspan="2">Jan</th>
                                    <th colspan="2">Feb</th>
                                    <th colspan="2">March</th>

                                    <th colspan="2">Apr</th>
                                    <th colspan="2">May</th>
                                    <th colspan="2">Jun</th>

                                    <th colspan="2">Jul</th>
                                    <th colspan="2">Aug</th>
                                    <th colspan="2">Sep</th>

                                    <th colspan="2">Oct</th>
                                    <th colspan="2">Nov</th>
                                    <th colspan="2">Dec</th>
                                    <th rowspan="2">Action</th>


                                </tr>
                                <tr>

                                    <th>HC</th>
                                    <th>Value</th>

                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                    <th>HC</th>
                                    <th>USD</th>
                                </tr>
                            </thead>
                             <tbody>
                             @foreach ($sales as $index => $sale)
                                <tr>
                                    <td><label>{{ $index+1 }}</label></td>
                                    <td><span class="large-field">{{ $sale->user->name }}</span></td>
                                    <td><span>{{ $sale->customer_name }}</span></td>
                                    <td><span class="label label-info">{{ $sale->country->name }}</span></td>
                                    <td><span>{{ $regions[$sale->region] }}</span></td>
                                    <td><span>{{ $sale->opportunity_name }}</span></td>
                                    <td><span>{{ $engagements[$sale->engagement] }}</span></td>
                                    <td><span>{{ $services[$sale->service] }}</span></td>
                                    <td><span>{{ $sale->head_count }}</span></td>
                                    <td><span>{{ $sale->value }}</span></td>
                                    <td><span>{{ $sale->duration }}</span></td>
                                    <td><span>{{ $sale->probability }}</span></td>
                                    <td><p class="large-field text-left">{{ date('d/m/y', strtotime($sale->started_at)) }}</p></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>5</td>
                                    <td><span class="name">15,000.00</span></td>
                                    <td>

                    <a href="sale/{{ $sale->id }}/edit"><i
                                            class="icon-pencil"></i></a> 
{{ Form::open(array('url' => 'sale/' . $sale->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}

                    {{ Form::submit('', array('class' => 'btn btn-xs btn-link icon-trash')) }}
                {{ Form::close() }}
</td>
                                </tr>
        
                             @endforeach

                                
                             
                                

                            </tbody>
                        </table>
                    </div>


        <a href="sale/create"><button type="button" class="btn btn-primary">Create</button></a>
@endsection