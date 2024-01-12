@extends('layouts.app')

@section('content')
    

    <div class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="Jumbo">
    </div>
    <h1>Comics</h1>
        <div class="row row-cols-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div>
                        <img class="w-50 h-50" src="{{ $comic['thumb'] }}" alt="">
                        <h4>{{ $comic['series'] }}</h4>
                        <p>{{ $comic['price'] . ' || ' . $comic['type'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
@endsection