@extends('guest.layouts.base')

@section('content')
<div class="container">
    <div class="flex-container">
    @foreach ($comics as $comic)
      <div class="card-comic">
        <div class="card">
            <div class="main-content">
              <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
              <h2>{{ $comic['series'] }}</h2>
            </div>
          </div>
      </div>
    @endforeach
    </div>
    <div class="current-series">
      current series
    </div>
    <div class="buttons">
      <button class="load">
        load more
      </button>
    </div>
  </div>
@endsection
