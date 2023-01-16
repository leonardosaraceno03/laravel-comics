@extends('layouts.app')
@section('page-title', 'prodotto singolo')
@section('main-content')
    <h2>Prodotto: {{ $singolo_elemento['title'] }}</h2>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis corporis facilis odio autem voluptatibus
        quibusdam rem vel cumque temporibus modi aliquam excepturi dicta asperiores nemo quo harum, numquam maiores veniam.
    </p>
@endsection
@section('footer-content')
