@extends('base')
@section('title')
    About-Us | {{config('app.name')}}
@endsection
@section('content')
    <img src="{{asset('/img/mohssine.png')}}" alt="Drapeau du Maroc" class="my-12 h-32 w-32 rounded-full shadow-md">
    <h2 class="mb-5 text-gray-700"> Built with <span class="text-pink-500">&hearts;</span> by Mohssine ZERNOUN </h2>
    <p><a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('welcome') }}">Revenir à la page d'acceuil</a></p>

@endsection
