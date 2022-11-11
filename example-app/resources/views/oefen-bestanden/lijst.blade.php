
@extends('layout')

@section('content')
    
@section
<h1>{{$heading}}</h1>

@unless(count($lijsten) == 0)

    @foreach($lijsten as $ls)
        <h2><a href="/lijst-order/{{$ls['id']}}">{{$ls['naam']}}</a></h2>
        <p>{{$ls['leeftijd'] . ' jaar'}}<p>
        <p>{{$ls['omschrijving']}}<p>
    @endforeach

    @else
    <p>geen resultaten<p>
@endunless

@endsection