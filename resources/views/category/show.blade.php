@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p><strong>Publicado por:</strong> {{ $post->poster }}</p>
    <p>{{ $post->content }}</p>
    <p><strong>Habilitado:</strong> {{ $post->habilitated ? 'Sí' : 'No' }}</p>
@endsectio