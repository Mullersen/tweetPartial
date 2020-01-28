@extends('master')

@section('title')
    Edit Tweet
@endsection

@section('header')
    @php
        $title = 'You are editing your tweet'
    @endphp
    @include('header')
@endsection

@section('sidebar')
    @include('sidebar')
@endsection

@section('content')

        <form class="form" action="/{{{$tweets->id}}}" method="post">
            @csrf
            <div><input class="forminput" type="text" name="author" value='{{$tweets->author}}'></div>
            <div><textarea class="forminput" id="textarea" cols='100' name='Content'>{{$tweets->content}}</textarea></div>
            <div><button class="button" type="submit" name="id" value="{{$tweets->id}}">Save Tweet</button></div>
        </form>

</div>

@endsection



