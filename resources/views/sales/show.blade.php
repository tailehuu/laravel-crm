@extends('layouts.master')

@section('title', 'Full Value')

@section('content')
    <h1 class="page-header">Detail</h1>
    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam.
        Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id
        elit.</p>

    <div class="form-horizontal">
	<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								
									<label  class="col-sm-5 control-label">Sale
										Person</label>
									<div class="col-sm-7">
									<input type="text" class="form-control" name="customer_name" value="{{ $sale->user->name}}">
									
									
										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Prospect/
										Customer Name</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" name="customer_name" value="{{ $sale->customer_name}}">
									</div>
								</div>
							</div>
						</div>
<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-5 control-label">Country</label>
									<div class="col-sm-7">
									<input type="text" class="form-control" name="opportunity_name" value="{{ $sale->country->name }}">
										
										
										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Region</label>
									<div class="col-sm-7">
									<input type="text" class="form-control" name="opportunity_name" value="{{ $regions[$sale->region] }}">
							
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

									
										<input type="text" class="form-control" name="opportunity_name" value="{{ $sale->opportunity_name}}">
									


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Engagement
										Type</label>
									<div class="col-sm-7">
									<input type="text" class="form-control" name="opportunity_name" value="{{ $engagements[$sale->engagement] }}">
									
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-5 control-label">Service
										Type</label>
									<div class="col-sm-7">
<input type="text" class="form-control" name="opportunity_name" value="{{ $services[$sale->service] }}">
									
										
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Start
										Date</label>
									<div class="col-sm-7">
										
      <input class="form-control"  type="text" name="started_at" value="{{ $sale->started_at }}">
    
   
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-5 control-label">HC</label>
									<div class="col-sm-7">

										<input type="text" class="form-control" name="head_count" value="{{ $sale->head_count }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Value</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" name="value" value="{{ $sale->value }}">
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
<input type="text" class="form-control" name="head_count" value="{{ $sale->duration }}">
	
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Probability
										%</label>
									<div class="col-sm-7">
										<input type="text" class="form-control" name="probability" value="{{ $sale->probability }}">
									</div>
								</div>
							</div>
						</div>
						
						 <hr>
    
    	<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">January:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="jan_hc" value="{{ $sale->jan_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="jan_val" value="{{ $sale->jan_val }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">February:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="feb_hc" value="{{ $sale->feb_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="feb_val" value="{{ $sale->feb_val }}">


									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">March:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="mar_hc" value="{{ $sale->mar_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="mar_val" value="{{ $sale->mar_val }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">April:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="apr_hc" value="{{ $sale->apr_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="apr_val" value="{{ $sale->apr_val }}" >


									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">May:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="may_hc" value="{{ $sale->may_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="may_val" value="{{ $sale->may_val }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">June:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="jun_hc" value="{{ $sale->jun_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="jun_val" value="{{ $sale->jun_val }}">


									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">July:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="jul_hc" value="{{ $sale->jul_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="jul_val" value="{{ $sale->jul_val }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">August:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="aug_hc" value="{{ $sale->aug_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="aug_val" value="{{ $sale->aug_val }}">


									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Septerber:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="sep_hc" value="{{ $sale->sep_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="sep_val" value="{{ $sale->sep_val }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Octorber:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="oct_hc" value="{{ $sale->oct_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="oct_val" value="{{ $sale->oct_val }}">


									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">November:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="nov_hc" value="{{ $sale->nov_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="nov_val" value="{{ $sale->nov_val }}">


									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">December:   HC</label>
									<div class="col-sm-3">

										<input type="text" class="form-control" name="dec_hc" value="{{ $sale->dec_hc }}">


									</div>
									<label for="inputEmail3" class="col-sm-2 control-label">Value</label>
									<div class="col-sm-4">

										<input type="text" class="form-control" name="dec_val" value="{{ $sale->dec_val }}">


									</div>
								</div>
							</div>
						</div>

						

</div>

    
@endsection