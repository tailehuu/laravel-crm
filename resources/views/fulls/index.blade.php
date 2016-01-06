@extends('layouts.master') @section('title', 'Full Value')

@section('content')


<div class="row page-header">
	<div class="col-sm-11 ">
		<h1 class="no-padding">Full Value</h1>
	</div>
	<div class="col-sm-1">
		<a class="show-hide-filter pull-right" data-toggle="collapse" data-target="#demo">Filter <span class="caret"></span></a> 
	</div>

</div>



  <div id="demo" class="collapse">
{{ Form::open(array('url' => 'value', 'method' => 'get', 'class' => 'form-horizontal')) }}
 
 
 @if($arr_Request['q'] == 'full' || $arr_Request['q'] == 'weighted')
	<input type="hidden" name="q" value="{{ $arr_Request['q'] }}">
 @endif
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">

			<label class="col-sm-5 control-label">Sale Person</label>
			<div class="col-sm-7">
				<select class="form-control select-value" name="user_id">
				<option></option> 
				@foreach($users as $key => $user)
					@if($arr_Request['user_id'] == $user->id)
					<option value="{{ $user->id }}" selected="selected">{{ $user->name }}</option>
					@else
					<option value="{{ $user->id }}">{{ $user->name }}</option>
					@endif
					@endforeach

				</select>


			</div>
		</div>
	</div>

</div>

<div class="row">

	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Prospect/
				Customer Name</label>
			<div class="col-sm-7">
				
					<select class="form-control select-value" name="customer_name">
				<option></option> 
				@foreach($customerNames as $key => $customerName)
					@if($arr_Request['customer_name'] == $customerName->customer_name)
					<option value="{{ $customerName->customer_name }}" selected="selected">{{ $customerName->customer_name }}</option>
					@else
					<option value="{{ $customerName->customer_name }}">{{ $customerName->customer_name }}</option>
					@endif
					@endforeach

				</select>
					
					
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-5 control-label">Country</label>
			<div class="col-sm-7">
				<select class="form-control select-value" name="country_id">
				<option ></option> 
					@foreach ($countries as $country)					
					@if($arr_Request['country_id'] == $country->id)
					<option value="{{ $country->id }}" selected="selected">{{ $country->name }}</option>
					@else
					<option value="{{ $country->id }}">{{ $country->name }}</option>
					@endif
					@endforeach			

				</select>


			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Region</label>
			<div class="col-sm-7">
				<select class="form-control select-value" name="region"> 
				<option ></option> 
				@foreach($regions as $key => $region)
					@if($arr_Request['region'] != '' && $arr_Request['region'] == $key)
					
					<option value="{{ $key }}" selected="selected">{{ $region }}</option>
					@else
					<option value="{{ $key }}">{{ $region }}</option>
					@endif
					@endforeach
					
					
				</select>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Vertical</label>
			<div class="col-sm-7">
				<select class="form-control select-value" name="vertical"> 
				<option ></option> 
				@foreach($verticals as $key => $vertical)
					@if($arr_Request['vertical'] == $key && $arr_Request['vertical'] != '')
					<option value="{{ $key }}" selected="selected">{{ $vertical }}</option>
					@else
					<option value="{{ $key }}">{{ $vertical }}</option>
					@endif
					@endforeach

				</select>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Delivery Location</label>
			<div class="col-sm-7">
				<select class="form-control select-value" name="delivery_location"> 
				<option ></option> 
				@foreach($deliveryLocations as $key => $deliveryLocation)
					@if($arr_Request['delivery_location'] == $key && $arr_Request['delivery_location'] != '')
					<option value="{{ $key }}" selected="selected">{{ $deliveryLocation }}</option>
					@else
					<option value="{{ $key }}">{{ $deliveryLocation }}</option>
					@endif

					@endforeach

				</select>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Engagement
				Type</label>
			<div class="col-sm-7">
				<select class="form-control select-value" name="engagement">
				<option ></option> 
					@foreach ($engagements as $key => $engagement)
					
					@if($arr_Request['engagement'] == $key && $arr_Request['engagement'] != '')
					<option value="{{ $key }}" selected="selected">{{ $engagement }}</option>
					@else
					<option value="{{ $key }}">{{ $engagement }}</option>
					@endif
					@endforeach
				</select>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-5 control-label">Service Type</label>
			<div class="col-sm-7">

				<select class="form-control select-value" name="service"> 
				<option ></option> 
				@foreach($services as $key => $service)
				
				@if($arr_Request['service'] == $key && $arr_Request['service'] != '')
					<option value="{{ $key }}" selected="selected">{{ $service }}</option>
					@else
					<option value="{{ $key }}">{{ $service }}</option>
					@endif
					@endforeach
				</select>


			</div>
		</div>
	</div>



</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-5 control-label">Year</label>
			<div class="col-sm-7">

				<select class="form-control select-value" name="year"> 
				<option ></option> 
				@foreach($years as $year)
				
				@if($arr_Request['year'] == $year)
					<option value="{{ $year }}" selected="selected">{{ $year }}</option>
					@else
					<option value="{{ $year }}">{{ $year }}</option>
					@endif
					@endforeach
				</select>
			</div>
		</div>
	</div>



</div>


<div class="row">
	<div class="col-sm-6">
		<label class="col-sm-5 control-label"></label>

		<div class="col-sm-7">{{ Form::submit('Filter', array('class' => 'btn
			btn-primary')) }}</div>

	</div>

</div>




{{ Form::close() }}
  </div>



<br>
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
				<td>
				{{ link_to_route('sale.edit', $title = $sale->customer_name, $parameters = array('id'=>$sale->id), $attributes = array()) }}
				</td>
				<td><span class="label label-info">{{ $sale->country->name }}</span></td>
				<td><span>{{ $regions[$sale->region] }}</span></td>
				<td><span>{{ $verticals[$sale->vertical] }}</span></td>
				<td><span>{{ $deliveryLocations[$sale->delivery_location] }}</span></td>
				<td><span>{{ $sale->opportunity_name }}</span></td>
				<td><span>{{ $engagements[$sale->engagement] }}</span></td>
				<td><span>{{ $services[$sale->service] }}</span></td>
				<td class="text-right"><span>{{ number_format($sale->head_count, 2) }}</span></td>
				<td class="text-right"><span>{{ number_format($sale->value, 2) }}</span></td>
				<td class="text-right"><span>{{ $sale->duration }}</span></td>
				<td class="text-right"><span>{{ $sale->probability }}</span></td>
				<td class="text-right"><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->started_at)) }}</p></td> 
				@foreach ($sale->months	as $month)
				<td class="text-right">{{ $month['hc'] > 0 ? number_format($month['hc'], 2) : '' }}</td>
				<td class="text-right"><span class="name">{{ $month['value'] > 0 ? number_format($month['value'], 2) : '' }}</span></td>
				@endforeach

			</tr>

			@endforeach




		</tbody>
	</table>
</div>



@endsection
