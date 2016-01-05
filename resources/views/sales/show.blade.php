@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
<h1 class="page-header">Detail</h1>


<div class="form-horizontal">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">

				<label class="col-sm-5  text-left">Sale Person</label>
				<div class="col-sm-7">
					<span class="col-sm-7">{{ $sale->user->name}}</span>


				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 ">Prospect/ Customer
					Name</label>
				<div class="col-sm-7">

					<span class="col-sm-7">{{ $sale->customer_name}}</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 ">Country</label>
				<div class="col-sm-7">

					<span class="col-sm-7">{{ $sale->country->name }}</span>
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 ">Region</label>
				<div class="col-sm-7">


					<span class="col-sm-7">{{ $regions[$sale->region] }}</span>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 ">Opportunity Name</label>
				<div class="col-sm-7">


					<span class="col-sm-7">{{ $sale->opportunity_name}}</span>

				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 ">Engagement Type</label>
				<div class="col-sm-7">

					<span class="col-sm-7">{{ $engagements[$sale->engagement] }}</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 ">Service Type</label>
				<div class="col-sm-7">

					<span class="col-sm-7">{{ $services[$sale->service] }}</span>


				</div>
			</div>
		</div>



	</div>
	
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 ">Head Count</label>
				<div class="col-sm-7">
					<span class="col-sm-7">{{ $sale->head_count }}</span>




				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 ">Value</label>
				<div class="col-sm-7">
					<span class="col-sm-7">{{ $sale->value }}</span>



				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 ">Duration (month)</label>
				<div class="col-sm-7">
					<span class="col-sm-7">{{ $sale->duration }}</span>



				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 ">Probability (%)</label>
				<div class="col-sm-7">
					<span class="col-sm-7">{{ $sale->probability }}</span>

				</div>
			</div>
		</div>
	</div>
<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 ">Start Date</label>
				<div class="col-sm-7">
					<span class="col-sm-7">{{ $sale->started_at }}</span>



				</div>
			</div>
		</div>
	</div>


	




</div>


@endsection
