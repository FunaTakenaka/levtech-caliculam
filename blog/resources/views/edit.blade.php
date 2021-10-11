@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>Title</h2>
                <input type='text' name='post[title]' placeholder = 'タイトル' value="{{ $post->title }}"/>
            </div>
            <div class='body'>
                <h2>Body</h2>
                <textarea type = "text" name = "post[body]" placeholder = "今日も一日お疲れ様でした。">{{ $post->body }}</textarea>
            </div>
            <input type = "submit" value = "update">
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>
@endsection