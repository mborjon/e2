@extends('templates.master')

@section('title')
Round Details
@endsection

@section('content')

<h2>Round Details</h2>

<ul>
    <li>Choice: {{ $round['choice'] }}</li>
    <li>Results: {{ $round['winner'] == 1 ? 'You won' : 'You lost' }}</li>
    <li>Time: {{ $round['time'] }}</li>
</ul>


@endsection
