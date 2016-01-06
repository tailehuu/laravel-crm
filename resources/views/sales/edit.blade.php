@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
<h1 class="page-header">Edit</h1>


{{ Form::model($sale, array('route' => array('sale.update', $sale->id),
'method' => 'PUT')) }}
<div class="form-horizontal">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">

				<label class="col-sm-5 control-label">Sale Person</label>
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
				<label for="inputPassword3" class="col-sm-5 control-label">Prospect/
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
				<label for="inputEmail3" class="col-sm-5 control-label">Country</label>
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
				<label for="inputPassword3" class="col-sm-5 control-label">Region</label>
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
				<label for="inputPassword3" class="col-sm-5 control-label">Vertical</label>
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
				<label for="inputPassword3" class="col-sm-5 control-label">Delivery Location</label>
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
				<label for="inputEmail3" class="col-sm-5 control-label">Opportunity
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
				<label for="inputPassword3" class="col-sm-5 control-label">Engagement
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
				<label for="inputEmail3" class="col-sm-5 control-label">Service Type</label>
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
				<label for="inputEmail3" class="col-sm-5 control-label">Head Count</label>
				<div class="col-sm-7">

					<input type="text" class="form-control" required name="head_count"
						value="{{ $sale->head_count }}">


				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label">Value</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" required name="value"
						value="{{ $sale->value }}">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label">Duration
					(month)</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" required name="duration"
						value="{{ $sale->duration }}">



				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label">Probability
					(%)</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" required name="probability"
						value="{{ $sale->probability }}">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label">Start
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


	<div class="row">
		<div class="col-sm-6">
			<label class="col-sm-5 control-label"></label>

			<div class="col-sm-7">{{ Form::submit('Submit', array('class' => 'btn
				btn-primary')) }}</div>

		</div>

	</div>



</div>




{{ Form::close() }} @endsection
