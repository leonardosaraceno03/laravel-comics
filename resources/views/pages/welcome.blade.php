@extends('layouts.app')

@section('page-title', 'DC COMICS HOME')

@section('main-content')

    <div class="container">
        <div class="row ">
            @foreach ($comics as $id => $elem)
                <div class="col-3">
                    <a href="{{ route('show.comics', compact('id')) }}">
                        <img src="{{ $elem['thumb'] }}" alt="">
                        <h5>{{ $elem['title'] }}</h5>
                    </a>


                </div>
            @endforeach
        </div>
    </div>

@endsection


@section('footer-content')
