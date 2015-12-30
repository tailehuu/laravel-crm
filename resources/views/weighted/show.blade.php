@extends('layouts.master') @section('title', 'Full Value')

@section('content')
<h1 class="page-header">Detail</h1>
<p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum
	nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem
	lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies
	vehicula ut id elit.</p>

<div class="form-horizontal">
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">

				<label class="col-sm-5 control-label">Sale Person</label>
				<div class="col-sm-7">
					<label class="col-sm-7 control-label">{{ $sale->user->name}}</label>

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
				<label class="col-sm-7 control-label">{{ $sale->customer_name}}</label>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label">Country</label>
				<div class="col-sm-7">
				<label class="col-sm-7 control-label">{{ $sale->country->name }}</label>
					
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label">Region</label>
				<div class="col-sm-7">
				<label class="col-sm-7 control-label">{{ $regions[$sale->region] }}</label>
					

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
<label class="col-sm-7 control-label">{{ $sale->opportunity_name}}</label>
					

				
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
				<label class="col-sm-7 control-label">{{ $engagements[$sale->engagement] }}</label>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label">Service Type</label>
				<div class="col-sm-7">
					
<label class="col-sm-7 control-label">{{ $services[$sale->service] }}</label>

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

<label class="col-sm-7 control-label">{{ $sale->started_at }}</label>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label">HC</label>
				<div class="col-sm-7">

<label class="col-sm-7 control-label">{{ $sale->head_count }}</label>
					
				</div>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-5 control-label">Value</label>
				<div class="col-sm-7">
				
<label class="col-sm-7 control-label">{{ $sale->value }}</label>
					
					
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
						
<label class="col-sm-7 control-label">{{ $sale->duration }}</label>
					
					
					
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
										
<label class="col-sm-7 control-label">{{ $sale->probability }}</label>
					
				
				</div>
			</div>
		</div>
	</div>
	<hr>

	
	
	<div class="table-responsive">
                        <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                            <thead>
                                <tr>
    
                                <th rowspan="2">Date</th>
                                    <th >HC</th>
                                    <th >Value</th>
                                   
                                </tr>
                                
                            </thead>
                             <tbody>
                             @foreach($sale->hc_month as $month)
                                                             <tr>
                                    <td><label>{{ $month['date'] }}</label></td>
                                    <td><span class="large-field">{{ $month['hc'] }}</span></td>
                                    <td><a href="sale/1"><span>{{ $month['value'] }}</span></a></td>
                                   


                                </tr>
        
@endforeach
                                

                            </tbody>
                        </table>
                    </div>

	


</div>


@endsection
