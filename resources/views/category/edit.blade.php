@extends('layout')

@section('content')
    <h1>Editar Post</h1>
    <p>Título: {{ $post->title }}</p>
    <p>Contenido: {{ $post->content }}</p>
@endsection