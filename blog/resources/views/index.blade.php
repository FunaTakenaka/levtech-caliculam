@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @if(Auth::check())
        {{Auth::user()->name}}
        @else
        @endif
        <h1>Blog Name</h1>
        <p class = 'create'>[<a href = "posts/create">create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>{{ $post->user->name }}</small>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>
@endsection