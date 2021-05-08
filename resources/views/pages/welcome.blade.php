@extends('base')
@section('title')
    {{config('app.name')}}
@endsection
@section('content')
    <img src="{{ asset('/img/maroc.png') }}" alt="Drapeau du Maroc" class="mt-12 rounded shadow-md h-32">
    <h1 class="mt-5  text-3xl sm:text-5xl font-semibold text-indigo-600"> Hello from Morocco</h1>
    <p class="text-gray-800 text-lg"> I's currently {{date('H:i:A')}} </p>


@endsection
