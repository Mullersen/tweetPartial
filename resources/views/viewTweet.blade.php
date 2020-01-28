@extends('master')

@section('title')
    Viewing Tweet
@endsection

@section('header')
    @php
        $title = 'Viewing Tweet'
    @endphp
    @include('header')
@endsection

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')

    @foreach ($tweets as $tweet)
     <div>
        <p class="tweetContent">{{$tweet->content}}</p>
        <h1 class="tweetAuthor">{{$tweet->author}}</h1>
        <form class="form" action="/deletePost" method="post">
            @csrf
            <button class="button" type="submit" name="id" value="{{$tweet->id}}">Delete Post</button>
        </form>
        <form class="form" action="/editPost" method="post">
            @csrf
            <button class="button" type="submit" name="id" value="{{$tweet->id}}">Edit Post</button>
        </form>
        </div>
    @endforeach

    </div>

@endsection
