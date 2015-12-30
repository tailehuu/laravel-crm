@extends('layouts.master')

@section('title', 'Sale')

@section('content')
<div class="row">
<div class="col-sm-11 "><h1 class="page-header">Opportunity</h1></div>
<div class="col-sm-1"><a href="sale/create" class="text-right"><button type="button" class="btn btn-primary">Create</button></a></div>

</div>
    
 
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
            
                                    
                                    
                                  <!--   <th colspan="2" class="text-center">Jan</th>
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
                                    <th colspan="2" class="text-center">Dec</th>-->
                                    <th rowspan="2" class="text-center">Action</th> 


                                </tr>
                                <tr>

                                    <th>HC</th>
                                    <th>Value</th>

                                 <!--    <th>HC</th>
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
                                    <th>USD</th> -->
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
                                    <!--  <td>{{ $sale->jan_hc > 0 ? $sale->jan_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->jan_val > 0 ? $sale->jan_val : '' }}</span></td>
                                    <td>{{ $sale->feb_hc > 0 ? $sale->feb_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->feb_val > 0 ? $sale->feb_val : '' }}</span></td>
                                    <td>{{ $sale->mar_hc > 0 ? $sale->mar_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->mar_val > 0 ? $sale->mar_val : '' }}</span></td>
                                    <td>{{ $sale->apr_hc > 0 ? $sale->apr_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->apr_val > 0 ? $sale->apr_val : '' }}</span></td>
                                    <td>{{ $sale->may_hc > 0 ? $sale->may_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->may_val > 0 ? $sale->may_val : '' }}</span></td>
                                    <td>{{ $sale->jun_hc > 0 ? $sale->jun_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->jun_val > 0 ? $sale->jun_val : '' }}</span></td>
                                    <td>{{ $sale->jul_hc > 0 ? $sale->jul_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->jul_val > 0 ? $sale->jul_val : '' }}</span></td>
                                    <td>{{ $sale->aug_hc > 0 ? $sale->aug_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->aug_val > 0 ? $sale->aug_val : '' }}</span></td>
                                    <td>{{ $sale->sep_hc > 0 ? $sale->sep_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->sep_val > 0 ? $sale->sep_val : '' }}</span></td>
                                    <td>{{ $sale->oct_hc > 0 ? $sale->oct_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->oct_val > 0 ? $sale->oct_val : '' }}</span></td>
                                    <td>{{ $sale->nov_hc > 0 ? $sale->nov_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->nov_val > 0 ? $sale->nov_val : '' }}</span></td>
                                    <td>{{ $sale->dec_hc > 0 ? $sale->dec_hc : '' }}</td>
                                    <td><span class="name">{{ $sale->dec_val > 0 ? $sale->dec_val : '' }}</span></td> -->
                                    <td>
<a href="sale/{{ $sale->id }}">View</a>
                    <a href="sale/{{ $sale->id }}/edit">Edit</a> 
{{ Form::open(array('url' => 'sale/' . $sale->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}

                    {{ Form::submit('Delete', array('class' => 'btn btn-link')) }}
                {{ Form::close() }}
</td>
                                </tr>
        
                             @endforeach

                                
                             
                                

                            </tbody>
                        </table>
                    </div>


        
@endsection