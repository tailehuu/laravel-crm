@extends('layouts.master') @section('title', 'Full Value')

@section('content')

<h1 class="page-header">Full Value</h1>



<div class="table-responsive">
	<table
		class="table table-condensed table-striped table-bordered table-hover no-margin">
		<thead>
			<tr>

				<th class="text-center" rowspan="2">No<br> &nbsp
				</th>
				<th class="text-center" rowspan="2">Sale<br> Person
				</th>
				<th class="text-center" rowspan="2">Customer<br> Name
				</th>
				<th class="text-center" rowspan="2">Country<br> &nbsp
				</th>
				<th class="text-center" rowspan="2">Region<br> &nbsp
				</th>
				<th class="text-center" rowspan="2">Opportunity<br> Name
				</th>
				<th class="text-center" rowspan="2">Engagement<br> Type
				</th>
				<th class="text-center" rowspan="2">Service<br> Type
				</th>
				<th class="text-center" colspan="2" class="text-center">Total</th>
				<th class="text-center" rowspan="2">Duration<br> (month)
				</th>
				<th class="text-center" rowspan="2">Probability<br> (%)
				</th>
				<th class="text-center" rowspan="2">Start<br> Date
				</th>
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

				<th class="text-center">HC</th>
				<th class="text-center">Value</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>
				<th class="text-center">HC</th>
				<th class="text-center">USD</th>

			</tr>
		</thead>
		<tfoot>
    <tr>
     <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td class="text-right"><strong>Total</strong></td>
      @foreach ($totals	as $total)
				<td class="text-right"><strong>{{  $total['hc'] > 0 ? number_format($total['hc'], 2) : '' }}</strong></td>
				<td class="text-right"><strong><span class="name">{{ $total['value'] > 0 ? number_format($total['value'], 2) : '' }}</span></strong></td>
	@endforeach
	
	
    </tr>
  </tfoot>
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
				<td class="text-right">{{ $month['hc'] > 0 ? $month['hc'] : '' }}</td>
				<td class="text-right"><span class="name">{{ $month['value'] > 0 ? $month['value'] : '' }}</span></td>
				@endforeach

			</tr>

			@endforeach




		</tbody>
	</table>
</div>



@endsection
