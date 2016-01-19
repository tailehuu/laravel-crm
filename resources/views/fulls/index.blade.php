@extends('layouts.master') @section('title', 'Full Value')

@section('content')


<div class="row page-header">
	<div class="col-sm-11 ">
	@if($arr_Request['q'] == 'weighted')
		<h1 class="no-padding">Weighted Revenues</h1>
	@elseif($arr_Request['q'] == 'full')
		<h1 class="no-padding">Full Revenues</h1>
		@else
		<h1 class="no-padding">Full Revenues</h1>
		@endif
	</div>
<!-- 	<div class="col-sm-1"> -->
<!-- 		<a class="show-hide-filter pull-right" data-toggle="collapse" data-target="#demo">Filter <span class="caret"></span></a>  -->
<!-- 	</div> -->

</div>
{{ Form::open(array('url' => 'value', 'method' => 'get', 'class' => 'form-horizontal')) }}
@if($arr_Request['q'] == 'full' || $arr_Request['q'] == 'weighted')
	<input type="hidden" name="q" value="{{ $arr_Request['q'] }}">
 @endif
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<div class="col-sm-7">

				<select class="form-control select-value" name="year" id="year"> 
				<option value="" >Select a year</option> 
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
{{ Form::close() }}
<br>




    <div class="table-responsive">
	<table class="table table-condensed display table-striped table-bordered table-hover no-margin" id="example1">
		<thead>
			<tr>

				<th class="text-center" rowspan="2">No<br> &nbsp
				
				</th>
				<th class="text-center" rowspan="2" data-column="1">Sale Person

				<input class="column_filter" id="col1_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="2">Customer Name
<input class="column_filter" id="col2_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="3">Country &nbsp
				<input class="column_filter" id="col3_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="4">Region &nbsp
				<input class="column_filter" id="col4_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="5">Vertical &nbsp
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
				<th class="text-center" colspan="2" class="text-center" data-column="10">Total
				
				</th>
				<th class="text-center" rowspan="2" data-column="11">Duration (month)
				<input class="column_filter" id="col11_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="12">Probability (%)
				<input class="column_filter" id="col12_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="13">Closure Date
				<input class="column_filter" id="col13_filter" type="text">
				</th>
				<th class="text-center" rowspan="2" data-column="14">Start Date
				<input class="column_filter" id="col14_filter" type="text">
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

				<th class="text-center"><span class="text-center">HC</span></th>
				<th class="text-center"><span class="text-center">Value</span></th>
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
      
      <td class="text-right"><strong>Total</strong></td>
                <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
                 <th></th>
            </tr>
        </tfoot>

		<tbody>
			@foreach ($sales as $index => $sale)
			<tr>
			
				<td><label>{{ $index+1 }}</label></td>
				<td><span class="large-field">{{ $sale->user->name }}</span></td>
				<td><span>{{$sale->customer_name}}</span></td>
				<td><span>{{ $sale->country->name }}</span></td>
				<td><span>{{ $regions[$sale->region] }}</span></td>
				<td><span>{{ $verticals[$sale->vertical] }}</span></td>
				<td><span>{{ $deliveryLocations[$sale->delivery_location] }}</span></td>
				<td>
				{{ link_to_route('sale.edit', $title = $sale->opportunity_name, $parameters = array('id'=>$sale->id), $attributes = array()) }}
				</td>
				<td><span>{{ $engagements[$sale->engagement] }}</span></td>
				<td><span>{{ $services[$sale->service] }}</span></td>
				<td class="text-right">{{ number_format($sale->head_count, 2) }}</td>
				<td class="text-right">{{ number_format($sale->value, 2) }}</td>
				<td class="text-right"><span>{{ $sale->duration }}</span></td>
				<td class="text-right"><span>{{ $sale->probability }}</span></td>
				<td><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->closure_date)) }}</p></td>
				<td class="text-right"><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->started_at)) }}</p></td> 
				@foreach ($sale->months	as $month)
				<td class="text-right">{{ $month['hc'] > 0 ? number_format($month['hc'], 2) : '' }}</td>
				<td class="text-right">{{ $month['value'] > 0 ? number_format($month['value'], 2) : '' }}</td>
				@endforeach

			</tr>

			@endforeach


		</tbody>
	</table>
    
</div>
    
<script type="text/javascript">
var select = document.getElementById('year');
select.onchange = function(){
    this.form.submit();
};

</script>
<script type="text/javascript">
      
function filterColumn ( i ) {
    $('#example1').DataTable().column( i ).search(
        $('#col'+i+'_filter').val()
    ).draw();
}
 
$(document).ready(function() {
    $('#example1').DataTable({
    	"ordering": false,
    	"footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // Remove the formatting to get integer data for summation
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
    
            
            // Total over this page
            pageTotal = api
                .column( 10, { page: 'current'} )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            pageTotalvalue = api
            .column( 11, { page: 'current'} )
            .data()
            .reduce( function (a, b) {
                return intVal(a) + intVal(b);
            }, 0 );
            
         	// Update footer
            $( api.column( 10 ).footer() ).html(pageTotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));            
            $( api.column( 11 ).footer() ).html(pageTotalvalue.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
            
            for (i = 16; i < 40; i++) {
                var bien = "pageTotalvalue"+i;
                bien = api.column( i, { page: 'current'} ).data().reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            	$( api.column( i ).footer() ).html(bien.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
            	
            } 
            
            
        }
        });


    $('input.column_filter').on( 'keyup click', function () {
        filterColumn( $(this).parents('th').attr('data-column') );
    } );
} );

</script>

@endsection
