@extends('layouts.master')

@section('title', 'Weighted Value')

@section('content')
    <h1 class="page-header">Weighted Value</h1>
    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam.
        Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id
        elit.</p>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Sale Person</th>
                <th>Prospect/Customer Name</th>
                <th>Country</th>
                <th>Region</th>
                <th>Opportunity Name</th>
                <th>Engagement Type</th>
                <th>Service Type</th>
                <th>HC</th>
                <th>Value</th>
                <th>Duration (month)</th>
                <th>Probability %</th>
                <th>Start Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $index => $sale)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $sale->user->name }}</td>
                    <td>{{ $sale->customer_name }}</td>
                    <td>{{ $sale->country->name }}</td>
                    <td>{{ $regions[$sale->region] }}</td>
                    <td>{{ $sale->opportunity_name }}</td>
                    <td>{{ $engagements[$sale->engagement] }}</td>
                    <td>{{ $services[$sale->service] }}</td>
                    <td>{{ $sale->head_count }}</td>
                    <td>{{ $sale->value }}</td>
                    <td>{{ $sale->duration }}</td>
                    <td>{{ $sale->probability }}</td>
                    <td>{{ $sale->started_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection