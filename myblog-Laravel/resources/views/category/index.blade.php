@extends('layouts.app')


@section('content')
    <h1>Listado de posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ url('category/show/' . $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection