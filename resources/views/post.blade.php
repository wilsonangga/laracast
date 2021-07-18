@extends('layout')

@section('content')
    <article>
        <h1>{{$posts->title}}</h1>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            {!! $posts->body !!}
        </div>

    </article>
    <a href="/">Go Back</a>
@endsection
