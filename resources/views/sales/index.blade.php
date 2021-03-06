@extends('layouts.master') @section('title', 'Opportunity')

@section('content')
    <div class="row page-header">
        <div class="col-sm-11 ">
            <h1 class="no-padding">Opportunities</h1>
        </div>
        <div class="col-sm-1">
            <a href="sale/create" class="text-right">
                <button type="button"
                        class="btn btn-primary">Create
                </button>
            </a>
        </div>
    </div>
    <p>Here you can add & modify the Opportunities details. Monthly Head Count & Revenue numbers are automatically
        calculated. For Opportunities that are Fixed Price & 100%, you can modify the Monthly Head Count & Revenue
        numbers manually.</p>

    <div class="table-responsive">
        <table class="table table-condensed table-striped table-bordered table-hover no-margin" id="example">
            <thead>
            <tr class="text-center">
                <th class="text-center" rowspan="2">No<br> &nbsp;
                </th>
                <th class="text-center" rowspan="2" data-column="1">Sale Person
                    <input class="column_filter" id="col1_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="2">Customer Name
                    <input class="column_filter" id="col2_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="3">Country
                    <input class="column_filter" id="col3_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="4">Region
                    <input class="column_filter" id="col4_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="5">Vertical
                    <input class="column_filter" id="col5_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="6">Delivery Location
                    <input class="column_filter" id="col6_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="7">Opportunity Name
                    <input class="column_filter" id="col7_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="8">Opportunity Type
                    <input class="column_filter" id="col8_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="9">Engagement Type
                    <input class="column_filter" id="col9_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="10">Service Type
                    <input class="column_filter" id="col10_filter" type="text">
                </th>
                <th class="text-center" colspan="2" class="text-center">Total</th>
                <th class="text-center" rowspan="2" data-column="12">Duration <br> (month)
                    <input class="column_filter" id="col12_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="13">Probability <br> (%)
                    <input class="column_filter" id="col13_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="14">Closure Date
                    <input class="column_filter" id="col14_filter" type="text">
                </th>
                <th class="text-center" rowspan="2" data-column="15">Start Date
                    <input class="column_filter" id="col15_filter" type="text">
                </th>
                <th class="text-center" rowspan="2">Description <br> &nbsp;</th>
                <th rowspan="2" class="text-center">Action<br> &nbsp;
                </th>
            </tr>
            <tr>
                <th class="text-center">HC</th>
                <th class="text-center">Value</th>
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
                <td class="text-right"><strong>Total</strong></td>
                <th></th>
                <th></th>
            </tr>
            </tfoot>
            <tbody>
            @foreach ($sales as $index => $sale)
                <tr>
                    <td><label>{{ $index+1 }}</label></td>
                    <td><span class="large-field">{{ $sale->user->name }}</span></td>
                    <td><span>{{ $sale->customer_name }}</span></td>
                    <td><span>{{ $sale->country->name }}</span></td>
                    <td><span>{{ $regions[$sale->region] }}</span></td>
                    <td><span>{{ $verticals[$sale->vertical] }}</span></td>
                    <td><span>{{ $deliveryLocations[$sale->delivery_location] }}</span></td>
                    <td><a href="sale/{{ $sale->id }}/edit"><span>{{ $sale->opportunity_name }}</span></a></td>
                    <td><span>{{ $opportunityTypes[$sale->opportunity_type] }}</span></td>
                    <td><span>{{ $engagements[$sale->engagement] }}</span></td>
                    <td><span>{{ $services[$sale->service] }}</span></td>
                    <td class="text-right">{{ number_format($sale->head_count, 0)  }}</td>
                    <td class="text-right">{{ number_format( $sale->value, 0) }}</td>
                    <td class="text-right"><span>{{ number_format( $sale->duration, 0) }}</span></td>
                    <td class="text-right"><span>{{ $sale->probability }}</span></td>
                    <td><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->closure_date)) }}</p></td>
                    <td><p class="large-field text-left width-date">{{ date('M d, Y',
						strtotime($sale->started_at)) }}</p></td>
                    <td>{{ $sale->description  }}</td>
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

        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
    <script type="text/javascript">

        function filterColumn(i) {
            $('#example').DataTable().column(i).search(
                    $('#col' + i + '_filter').val()
            ).draw();
        }

        $(document).ready(function () {
            $('#example').DataTable({
                "ordering": false,
                "footerCallback": function (row, data, start, end, display) {
                    var api = this.api(), data;

                    // Remove the formatting to get integer data for summation
                    var intVal = function (i) {
                        return typeof i === 'string' ?
                        i.replace(/[\$,]/g, '') * 1 :
                                typeof i === 'number' ?
                                        i : 0;
                    };


                    // Total over this page
                    pageTotal = api
                            .column(11, {page: 'current'})
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);
                    pageTotalvalue = api
                            .column(12, {page: 'current'})
                            .data()
                            .reduce(function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0);

                    // Update footer
                    $(api.column(11).footer()).html(pageTotal.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                    $(api.column(12).footer()).html(pageTotalvalue.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,'));
                }
            });

            $('input.column_filter').on('keyup click', function () {
                filterColumn($(this).parents('th').attr('data-column'));
            });
        });

    </script>
@endsection
