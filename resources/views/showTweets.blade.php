

@extends('master')

@section('title')
    Tweets
@endsection

@section('header')
    @php
        $title = 'You are viewing all tweets'
    @endphp
    @include('header')
@endsection

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')
    <div class="rightGridContent">
        <h1 class="tweetsHeader">Tweets</h1>
        @foreach ($tweets as $tweet)
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
        @endforeach
        <h1 class="tweetsHeader">Create New Tweet</h1>
        <form class="form" action="/" method="post">
            @csrf
            <input class="forminput" type="text" name="author" value='author'>
            <textarea class="forminput" id="textarea" cols='100' name='Content'>Content</textarea>
            <div><input class="button" type="submit" name="id" value="create tweet"></div>
        </form>
    </div>
</div>

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

