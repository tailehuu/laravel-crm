@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
<div class="row page-header">
	<div class="col-sm-11 ">
		<h1 class="no-padding">Opportunity</h1>
	</div>
	<div class="col-sm-1">
		<a href="sale/create" class="text-right"><button type="button"
				class="btn btn-primary">Create</button></a>
	</div>

</div>


<div class="table-responsive">
	<table
		class="table table-condensed table-striped table-bordered table-hover no-margin">
		<thead>
			<tr class="text-center">

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
				<th class="text-center" rowspan="2">Vertical<br> &nbsp
				</th>
				<th class="text-center" rowspan="2">Delivery<br> Location
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


				<th rowspan="2" class="text-center">Action<br> &nbsp
				</th>


			</tr>
			<tr>

				<th>HC</th>
				<th>Value</th>

			</tr>
		</thead>
		<tbody>
			@foreach ($sales as $index => $sale)
			<tr>
				<td><label>{{ $index+1 }}</label></td>
				<td><span class="large-field">{{ $sale->user->name }}</span></td>
				<td><a href="sale/{{ $sale->id }}/edit"><span>{{ $sale->customer_name }}</span></a></td>
				<td><span class="label label-info">{{ $sale->country->name }}</span></td>
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
						strtotime($sale->started_at)) }}</p></td>

				<td class="width-date"><a href="sale/{{ $sale->id }}/edit">Edit</a> 
					{{ Form::open(array('url'=> 'sale/' . $sale->id,'onsubmit' => 'return ConfirmDelete()')) }} {{ Form::hidden('_method', 'DELETE') }}

					{{ Form::submit('Delete', array('class' => 'btn btn-link')) }} 
					{{ Form::close() }}</td>
			</tr>

			@endforeach





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
