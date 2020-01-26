
@extends('master')

@section('title')
    Tweets
@endsection


@section('content')


@foreach ($tweets as $tweet)
<p>{{$tweet->content}}</p>
    <h1>{{$tweet->author}}</h1>
    <form action="/deletePost" method="post">
        @csrf
        <button type="submit" name="id" value="{{$tweet->id}}">Delete Post</button>
    </form>
    <form action="/editPost" method="post">
        @csrf
        <button type="submit" name="id" value="{{$tweet->id}}">Edit Post</button>
    </form>
@endforeach

@php
    print_r($tweet)
@endphp

<form action="/" method="post">
    @csrf
    <input type="text" name="author" value='author'>
    <input type="text" name="content" value='tweet'>
    <input type="submit" name="id" value="create tweet">
</form>

    {{-- loop through tweet array defined in tweetcontroller
    //<?php
    //print_r($allTweets)
    //print_r($allTweets[0])
    //foreach ($allTweets as $tweet){ //$tweet is now an associative array (because all tweets was an array containing an associative array)
    //    echo("<p>" . $tweet['content'] . "</p>");
    //    echo("<p><strong>" . $tweet['author'] . "</strong></p>");
    //}
    //?>--}}
@endsection
@include('links')
