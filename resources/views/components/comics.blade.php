@extends('layouts.app')

@section('page-title')

@section('main-content')
    <h2>Sei nella pagina prodotti di</h2>
    <div class="d-flex flex-wrap">
        @foreach ($comics as $elem)
            <div class="w-25">
                <img src="{{ $elem['thumb'] }}" alt="">
                <h5>{{ $elem['title'] }}</h5>
            </div>
        @endforeach
    </div>
@endsection
