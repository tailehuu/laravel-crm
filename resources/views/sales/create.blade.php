@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
<h1 class="page-header">Create</h1>


{{ Form::open(array('url' => 'sale', 'class' => 'form-horizontal')) }}



<div class="row">
	<div class="col-sm-6">
		<div class="form-group">

			<label class="col-sm-5 control-label">Sale Person</label>
			<div class="col-sm-7">
				<select class="form-control select-value" required name="user_id"> 
				<option selected="selected"></option>
				@foreach($users as $key => $user)

					<option value="{{ $user->id }}">{{ $user->name }}</option>

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
				<input type="text" class="form-control"
					name="customer_name" required>
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
				<option selected="selected"></option>
					@foreach ($countries as $country)

					<option value="{{ $country->id }}">{{ $country->name }}</option>

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
				<option selected="selected"></option>
				@foreach($regions as $key => $region)

					<option value="{{ $key }}">{{ $region }}</option> @endforeach

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
				<option selected="selected"></option>
				@foreach($verticals as $key => $vertical)

					<option value="{{ $key }}">{{ $vertical }}</option> @endforeach

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
				<option selected="selected"></option> 
				@foreach($deliveryLocations as $key => $deliveryLocation)

					<option value="{{ $key }}">{{ $deliveryLocation }}</option> @endforeach

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


				<input type="text" required class="form-control required"
					name="opportunity_name">



			</div>
		</div>
	</div>

</div>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-5 control-label">Opportunity
                Type</label>
            <div class="col-sm-7">
                <select class="form-control select-value" name="opportunity_type">
                    <option selected="selected"></option>
                    @foreach ($opportunityTypes as $key => $opportunityType)

                        <option value="{{ $key }}">{{ $opportunityType }}</option> @endforeach
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
				<option selected="selected"></option>
					@foreach ($engagements as $key => $engagement)

					<option value="{{ $key }}">{{ $engagement }}</option> @endforeach
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
				<option selected="selected"></option>
				@foreach($services as $key => $service)

					<option value="{{ $key }}">{{ $service }}</option> @endforeach
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

				<input type="number" data-fv-numeric-message="" required class="form-control required" name="head_count">


			</div>
		</div>
	</div>

</div>
<div class="row">

	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Value</label>
			<div class="col-sm-7">
				<input type="number" class="form-control" required name="value">
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
				<input type="number" required class="form-control required" name="duration">

			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Probability
				%</label>
			<div class="col-sm-7">
				<input type="number" data-fv-integer-message="The value is not an integer" required class="form-control" name="probability">
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Closure Date</label>
			<div class="col-sm-7">
				<div class="input-group date" id="dp3">
					<input class="form-control required" required type="text" name="closure_date">
					<span class="input-group-addon"><i
						class="glyphicon glyphicon-calendar"></i></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-5 control-label">Start Date</label>
			<div class="col-sm-7">
				<div class="input-group date" id="dp3">
					<input class="form-control required" required type="text" name="started_at">
					<span class="input-group-addon"><i
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




{{ Form::close() }} 

@endsection
