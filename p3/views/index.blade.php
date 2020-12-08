@extends('templates.master')

@section('title')
Dice Roll
@endsection

@section('content')

<h2>Instructions</h2>
<ul>
    <li>There is one pair of dice, each die has 6 sides, numbered 1-6, worth 1-6 depending on the side landing up.
    <li>Player A has die 1 and Player B has die 2.
    <li>Choose a side (Player A or Player B)
    <li>We'll roll the dice, and if the side you chose has the higher value, you win!
    <li>A tie is declared if both players roll the same value.
    </li>
</ul>

<form method='POST' action='/play'>

    <label>
        <input type='radio' name='choice' value='Player A'>

        Player A
    </label>

    <label>
        <input type='radio' name='choice' value='Player B'>
        Player B
    </label>

    <button type='submit'>Roll</button>

    @if($app->errorsExist())
    <ul class='error alert alert-danger'>
        @foreach($app->errors() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif


</form>

@if($results)

<div class='{{ $results['winner'] ? 'won' : 'lost' }}'>
    <p>You chose: {{ $results['choice']}}</p>

    @if($results['Tie'])
    It’s a tie.
    @elseif($results['winner'])
    Congratulations, you won!
    @else
    Sorry, you lost, please try again.
    @endif
</div>

@endif

<p>
    <a href='/history'>Game history...</a>
</p>
@endsection
