@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
<h1 class="page-header">Edit</h1>


{{ Form::model($sale, array('route' => array('sale.update', $sale->id),
'method' => 'PUT')) }}
<div class="form-horizontal">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">

				<label class="col-sm-5 control-label load-left">Sale Person</label>
				<div class="col-sm-7">
					<select class="form-control select-value" name="user_id"> 
					@foreach($users as $key => $user) 
					@if( $sale->user_id == $user->id)
						<option value="{{ $user->id }}" selected="selected">{{ $user->name
							}}</option> @else
						<option value="{{ $user->id }}">{{ $user->name }}</option> @endif


						@endforeach

					</select>


				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Prospect/
					Customer Name</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" required name="customer_name"
						value="{{ $sale->customer_name}}">
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label load-left">Country</label>
				<div class="col-sm-7">
					<select class="form-control select-value" name="country_id">
						@foreach ($countries as $country) @if($country->id == $sale->country_id)
						<option value="{{ $country->id }}" selected="selected">{{
							$country->name }}</option> @else
						<option value="{{ $country->id }}">{{ $country->name }}</option>
						@endif @endforeach

					</select>


				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Region</label>
				<div class="col-sm-7">
					<select class="form-control select-value" name="region"> 
					@foreach($regions as $key => $region) @if( $sale->region == $key)
						<option value="{{ $key }}" selected="selected">{{ $region }}</option>
						@else
						<option value="{{ $key }}">{{ $region }}</option> @endif
						@endforeach

					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Vertical</label>
				<div class="col-sm-7">
					<select class="form-control select-value" name="vertical"> 
					@foreach($verticals as $key => $vertical) @if( $sale->vertical == $key)
						<option value="{{ $key }}" selected="selected">{{ $vertical }}</option>
						@else
						<option value="{{ $key }}">{{ $vertical }}</option> @endif
						@endforeach

					</select>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Delivery Location</label>
				<div class="col-sm-7">
					<select class="form-control select-value" name="delivery_location"> 
					@foreach($deliveryLocations as $key => $deliveryLocation) @if( $sale->delivery_location == $key)
						<option value="{{ $key }}" selected="selected">{{ $deliveryLocation }}</option>
						@else
						<option value="{{ $key }}">{{ $deliveryLocation }}</option> @endif
						@endforeach

					</select>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label load-left">Opportunity
					Name</label>
				<div class="col-sm-7">


					<input type="text" class="form-control" required name="opportunity_name"
						value="{{ $sale->opportunity_name}}">



				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Engagement
					Type</label>
				<div class="col-sm-7">
					<select class="form-control select-value" name="engagement">
						@foreach ($engagements as $key => $engagement) 
						@if($sale->engagement == $key)
						<option value="{{ $key }}" selected="selected">{{ $engagement }}</option>
						@else
						<option value="{{ $key }}">{{ $engagement }}</option> @endif


						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label load-left">Service Type</label>
				<div class="col-sm-7">

					<select class="form-control select-value" name="service"> 
					@foreach($services as $key => $service) @if( $sale->service == $key)
						<option value="{{ $key }}" selected="selected">{{ $service }}</option>
						@else
						<option value="{{ $key }}">{{ $service }}</option> @endif


						@endforeach
					</select>


				</div>
			</div>
		</div>



	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label load-left">Head Count</label>
				<div class="col-sm-7">

					<input type="number" class="form-control" required name="head_count"
						value="{{ $sale->head_count }}">


				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Value</label>
				<div class="col-sm-7">
					<input type="number" class="form-control" required name="value"
						value="{{ $sale->value }}">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label load-left">Duration
					(month)</label>
				<div class="col-sm-7">
				@if($sale->probability == 100)
				<input type="number" class="form-control" disabled="disabled" required name="duration"
						value="{{ $sale->duration }}">
				@else
				<input type="text" class="form-control" required name="duration"
						value="{{ $sale->duration }}">
				@endif
				
					



				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Probability
					(%)</label>
				<div class="col-sm-7">
					<input type="number" data-fv-integer-message="The value is not an integer" class="form-control" required name="probability"
						value="{{ $sale->probability }}">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Closure Date</label>
				<div class="col-sm-7">
					<div class="input-group date" id="dp3">
						<input class="form-control" type="text" required name="closure_date"
							value="{{ $sale->closure_date }}"> <span class="input-group-addon"><i
							class="glyphicon glyphicon-calendar"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label load-left">Start
					Date</label>
				<div class="col-sm-7">
					<div class="input-group date" id="dp3">
						<input class="form-control" type="text" required name="started_at"
							value="{{ $sale->started_at }}"> <span class="input-group-addon"><i
							class="glyphicon glyphicon-calendar"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if($sale->probability == 100)
	@foreach($sale->values as $key => $value)
	
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
				
				<div class="col-sm-3 control-label load-left">{{ date('M d, Y', strtotime($value->month)) }}</div>
					<div for="inputPassword3" class="col-sm-3 control-label">Head Count </div>
					<div class="col-sm-6">
						<input type="text"  class="form-control" required name="hc{{ $key + 1 }}"
						value="{{ $value->head_count }}">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
				
					<div for="inputPassword3" class="col-sm-3 control-label">Value</div>
					<div class="col-sm-7">
						<input type="text" data-fv-integer-message="The value is not an integer" class="form-control" required name="value{{ $key + 1 }}"
						value="{{ $value->value }}">
					</div>
				</div>
			</div>
		</div>
	@endforeach
	@endif
	<div class="row">
		<div class="col-sm-6">
			<label class="col-sm-5 control-label load-left"></label>

			<div class="col-sm-7">{{ Form::submit('Submit', array('class' => 'btn
				btn-primary')) }}</div>

		</div>

	</div>



</div>




{{ Form::close() }} @endsection
