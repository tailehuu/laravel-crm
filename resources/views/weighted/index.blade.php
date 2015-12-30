@extends('layouts.master') @section('title', 'Weighted Value')

@section('content')

<h1 class="page-header">Weighted Value</h1>


<p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum
	nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem
	lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies
	vehicula ut id elit.</p>

<div class="table-responsive">
	<table
		class="table table-condensed table-striped table-bordered table-hover no-margin">
		<thead>
			<tr>

				<th rowspan="2">No</th>
				<th rowspan="2">Sale Person</th>
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
				<td><p class="large-field text-left">{{ date('d/m/y',
						strtotime($sale->started_at)) }}</p></td> 
				@foreach ($sale->months	as $month)
				<td>{{ $month['hc'] > 0 ? $month['hc'] : '' }}</td>
				<td><span class="name">{{ $month['value'] > 0 ? $month['value'] : '' }}</span></td>
				@endforeach

			</tr>

			@endforeach





		</tbody>
	</table>
</div>



@endsection
