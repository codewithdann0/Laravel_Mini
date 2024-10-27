@extends('layout')
@section('content')
    <div>
        <h1 class="align-center">Pizza List</h1>
    </div>


      <div>
            {{$name}}- {{$age}}
      </div>
    @foreach ($pizzas as $pizza)
        <p>{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>

        @if ($loop->first)
            <p>First LOOP</p>
        @endif

        @if ($loop->last)
            <p>The last Loop</p>
        @endif

    @endforeach
@endsection
