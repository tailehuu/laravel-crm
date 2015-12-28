@extends('layouts.master')

@section('title', 'Sale')

@section('content')
    <h1 class="page-header">Weighted Value</h1>
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
                                    <th colspan="2" class="text-center">Total</th>
                                    <th rowspan="2">Duration (month)</th>
                                    <th rowspan="2">Probability %</th>
                                    <th rowspan="2">Start Date</th>
            
                                    
                                    
                                    <th colspan="2" class="text-center">Jan</th>
                                    <th colspan="2" class="text-center">Feb</th>
                                    <th colspan="2" class="text-center">March</th>

                                    <th colspan="2" class="text-center">Apr</th>
                                    <th colspan="2" class="text-center">May</th>
                                    <th colspan="2" class="text-center">Jun</th>

                                    <th colspan="2" class="text-center">Jul</th>
                                    <th colspan="2" class="text-center">Aug</th>
                                    <th colspan="2" class="text-center">Sep</th>

                                    <th colspan="2" class="text-center">Oct</th>
                                    <th colspan="2" class="text-center">Nov</th>
                                    <th colspan="2" class="text-center">Dec</th>
<!--                                     <th rowspan="2" class="text-center">Action</th> -->


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
                                    <td><a href="sale/{{ $sale->id }}"><span>{{ $sale->customer_name }}</span></a></td>
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
                                    <td>{{ $sale->w_jan_hc > 0 ? $sale->w_jan_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_jan_val > 0 ? $sale->w_jan_val : '' }}</span></td>
                                    <td>{{ $sale->w_feb_hc > 0 ? $sale->w_feb_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_feb_val > 0 ? $sale->w_feb_val : '' }}</span></td>
                                    <td>{{ $sale->w_mar_hc > 0 ? $sale->w_mar_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_mar_val > 0 ? $sale->w_mar_val : '' }}</span></td>
                                    <td>{{ $sale->w_apr_hc > 0 ? $sale->w_apr_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_apr_val > 0 ? $sale->w_apr_val : '' }}</span></td>
                                    <td>{{ $sale->w_may_hc > 0 ? $sale->w_may_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_may_val > 0 ? $sale->w_may_val : '' }}</span></td>
                                    <td>{{ $sale->w_jun_hc > 0 ? $sale->w_jun_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_jun_val > 0 ? $sale->w_jun_val : '' }}</span></td>
                                    <td>{{ $sale->w_jul_hc > 0 ? $sale->w_jul_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_jul_val > 0 ? $sale->w_jul_val : '' }}</span></td>
                                    <td>{{ $sale->w_aug_hc > 0 ? $sale->w_aug_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_aug_val > 0 ? $sale->w_aug_val : '' }}</span></td>
                                    <td>{{ $sale->w_sep_hc > 0 ? $sale->w_sep_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_sep_val > 0 ? $sale->w_sep_val : '' }}</span></td>
                                    <td>{{ $sale->w_oct_hc > 0 ? $sale->w_oct_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_oct_val > 0 ? $sale->w_oct_val : '' }}</span></td>
                                    <td>{{ $sale->w_nov_hc > 0 ? $sale->w_nov_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_nov_val > 0 ? $sale->w_nov_val : '' }}</span></td>
                                    <td>{{ $sale->w_dec_hc > 0 ? $sale->w_dec_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->w_dec_val > 0 ? $sale->w_dec_val : '' }}</span></td>
                                  <!--   <td>
<a href="sale/{{ $sale->id }}"><i
                                            class="icon-check"></i></a> <br>
                    <a href="sale/{{ $sale->id }}/edit"><i
                                            class="icon-pencil"></i></a> <br>
{{ Form::open(array('url' => 'sale/' . $sale->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}

                    {{ Form::submit('', array('class' => 'btn btn-xs btn-link icon-trash')) }}
                {{ Form::close() }}
</td> -->
                                </tr>
        
                             @endforeach

                                
                             
                                

                            </tbody>
                        </table>
                    </div>


        <a href="sale/create"><button type="button" class="btn btn-primary">Create</button></a>
@endsection