@extends('layouts.master')

@section('title', 'Opportunity')

@section('content')
    <h1 class="page-header">Create</h1>
    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam.
        Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id
        elit.</p>
        

{{ Form::open(array('url' => 'sale', 'class' => 'form-horizontal')) }}



    <div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								
									<label  class="col-sm-5 control-label">Sale
										Person</label>
									<div class="col-sm-7">
									<select class="form-control select-value" name="user_id">
										@foreach ($users as $key => $user)
									
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
										<input type="text" class="form-control required" name="customer_name">
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
										@foreach ($regions as $key => $region)
									
											<option value="{{ $key }}">{{ $region }}</option>
										
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

									
										<input type="text" class="form-control required" name="opportunity_name">
									


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
									
											<option value="{{ $key }}">{{ $engagement }}</option>
										
										@endforeach
										</select>
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

										<select class="form-control select-value" name="service">
											@foreach ($services as $key => $service)
									
											<option value="{{ $key }}">{{ $service }}</option>
										
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

										<input type="text" class="form-control required" name="head_count">


									</div>
								</div>
							</div>
							
						</div>
<div class="row">

<div class="col-sm-6">
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-5 control-label">Value</label>
									<div class="col-sm-7">
										<input type="text" class="form-control required" name="value">
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
<input type="text" class="form-control required" name="duration">

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
										<input type="text" class="form-control" name="probability">
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
      <input class="form-control required" type="text" name="started_at">
      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
    </div>
									</div>
								</div>
							</div>
						</div>
    <hr>
    
<!--     	<div class="row"> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">January:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="jan_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="jan_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">February:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="feb_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="feb_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="row"> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">March:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="mar_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="mar_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">April:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="apr_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="apr_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="row"> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">May:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="may_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="may_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">June:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="jun_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="jun_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="row"> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">July:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="jul_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="jul_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">August:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="aug_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="aug_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="row"> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">Septerber:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="sep_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="sep_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">Octorber:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="oct_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="oct_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->
<!-- 						<div class="row"> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">November:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="nov_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="nov_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 							<div class="col-sm-6"> -->
<!-- 								<div class="form-group"> -->
<!-- 									<label for="inputEmail3" class="col-sm-3 control-label">December:   HC</label> -->
<!-- 									<div class="col-sm-3"> -->

<!-- 										<input type="text" class="form-control" name="dec_hc"> -->


<!-- 									</div> -->
<!-- 									<label for="inputEmail3" class="col-sm-2 control-label">Value</label> -->
<!-- 									<div class="col-sm-4"> -->

<!-- 										<input type="text" class="form-control" name="dec_val"> -->


<!-- 									</div> -->
<!-- 								</div> -->
<!-- 							</div> -->
<!-- 						</div> -->

    {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
        
        
        
  
@endsection