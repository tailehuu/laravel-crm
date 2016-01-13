@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
<div class="row page-header">
	<div class="col-sm-11 ">
		<h1 class="no-padding">Opportunities</h1>
	</div>
	<div class="col-sm-1">
		<a href="sale/create" class="text-right"><button type="button"
				class="btn btn-primary">Create</button></a>
	</div>

</div>
<p>Here you can add & modify the Opportunities details. Monthly Head Count & Revenue numbers are automatically calculated. For Opportunities that are Fixed Price & 100%, you can modify the Monthly Head Count & Revenue numbers manually.</p>

<div class="table-responsive">
	<table
		class="table table-condensed table-striped table-bordered table-hover no-margin" id="example">
		<thead>
			<tr class="text-center">

				<th class="text-center" rowspan="2">No<br> &nbsp
				</th>
				<th class="text-center" rowspan="2" data-column="1">Sale Person
				<input class="column_filter" id="col1_filter" type="text">
				</th>		
			
				<th class="text-center" rowspan="2" data-column="2">Customer Name
				<input class="column_filter" id="col2_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="3">Country
				<input class="column_filter" id="col3_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="4">Region
				<input class="column_filter" id="col4_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="5">Vertical
				<input class="column_filter" id="col5_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="6">Delivery Location
				<input class="column_filter" id="col6_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="7">Opportunity Name
				<input class="column_filter" id="col7_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="8">Engagement Type
				<input class="column_filter" id="col8_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="9">Service Type
				<input class="column_filter" id="col9_filter" type="text">
				</th>
				<th class="text-center" colspan="2" class="text-center">Total</th>
				<th class="text-center" rowspan="2" data-column="11">Duration <br> (month)
				<input class="column_filter" id="col11_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="12">Probability <br> (%)
				<input class="column_filter" id="col12_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="13">Closure Date
				<input class="column_filter" id="col13_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="14">Start Date
				<input class="column_filter" id="col14_filter" type="text">
				</th>


				<th rowspan="2" class="text-center">Action<br> &nbsp
				</th>


			</tr>
			<tr>

				<th class="text-center">HC</th>
				<th class="text-center">Value</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($sales as $index => $sale)
			<tr>
				<td><label>{{ $index+1 }}</label></td>
				<td><span class="large-field">{{ $sale->user->name }}</span></td>
				<td><a href="sale/{{ $sale->id }}/edit"><span>{{ $sale->customer_name }}</span></a></td>
				<td><span>{{ $sale->country->name }}</span></td>
				<td><span>{{ $regions[$sale->region] }}</span></td>
				<td><span>{{ $verticals[$sale->vertical] }}</span></td>
				<td><span>{{ $deliveryLocations[$sale->delivery_location] }}</span></td>
				<td><span>{{ $sale->opportunity_name }}</span></td>
				<td><span>{{ $engagements[$sale->engagement] }}</span></td>
				<td><span>{{ $services[$sale->service] }}</span></td>
				<td class="text-right"><span>{{ number_format($sale->head_count, 0)  }}</span></td>
				
				
				<td class="text-right"><span>{{ number_format( $sale->value, 0) }}</span></td>
				<td class="text-right"><span>{{ number_format( $sale->duration, 0) }}</span></td>
				<td class="text-right"><span>{{ $sale->probability }}</span></td>
				<td><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->closure_date)) }}</p></td>
				<td><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->started_at)) }}</p></td>

				<td class="width-date"><a href="sale/{{ $sale->id }}/edit">Edit</a> 
					{{ Form::open(array('url'=> 'sale/' . $sale->id,'onsubmit' => 'return ConfirmDelete()')) }} {{ Form::hidden('_method', 'DELETE') }}

					{{ Form::submit('Delete', array('class' => 'btn btn-link')) }} 
					{{ Form::close() }}</td>
			</tr>

			@endforeach

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
      
      <td class="text-right"><strong>Total</strong></td>
      <td>{{  $total_hc > 0 ? number_format($total_hc, 2) : '' }}</td>
      <td>{{  $total_value > 0 ? number_format($total_value, 2) : '' }}</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
      <td>&nbsp</td>
    </tr>



		</tbody>
	</table>
</div>

<script>

  function ConfirmDelete()
  {
  var x = confirm("Are you sure you want to delete?");
  if (x)
    return true;
  else
    return false;
  }

</script>

@endsection
