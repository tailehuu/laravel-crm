@extends('layouts.master')

@section('title', 'Full Value')

@section('content')
    <h1 class="page-header">Detail</h1>
    <p>Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam.
        Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id
        elit.</p>

    country = {{ $sale->country->name }}
@endsection