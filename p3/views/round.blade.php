@extends('templates.master')

@section('title')
Round Details
@endsection

@section('content')

<h2>Round Details</h2>

<ul>
    <li>Choice: {{ $round['choice'] }}</li>
    <li>Results: {{ $round['winner'] == 1 ? 'You won!' : 'Sorry, you lost. Please try again' }}</li>
    <li>Time: {{ $round['time'] }}</li>
</ul>


@endsection
