@extends('master')
<p>this is the page where you edit the tweet</p>

@section('content')

<form action="/{{{$tweets->id}}}" method="post">
    @csrf
    <input type="text" name="author" value={{$tweets->author}}>
    <input type="text" name="content" value={{$tweets->content}}>
    <button type="submit" name="id" value="{{$tweets->id}}">Save Tweet</button>
</form>

@endsection
