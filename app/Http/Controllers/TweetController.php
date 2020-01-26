<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetController extends Controller
{
    private $tweets = [ // hard coded to not have to communicate with DB
        [
            'author' => 'Mariann Haugland',
            'content' => 'This is my first tweet'
        ],
        [
            'author' => 'Mariann Haugland',
            'content' => 'This is my second tweet'
        ],
        [
            'author' => 'Mariann Haugland',
            'content' => 'This is my third tweet'
        ],
        [
            'author' => 'Mariann Haugland',
            'content' => 'This is my fourth tweet'
        ],
        [
            'author' => 'Mariann Haugland',
            'content' => 'This is my fifth tweet'
        ]
    ];

    function showTweet($id){//the show function has to take in a variable that specifies which post we want to show.
        $tweets = \DB::table('tweet') ->get();

        if ($id > sizeOf($tweets)){
            return view ('tweetError');
        } else{
        return view('showTweets', ["tweets" => [$tweets[$id]]]);
        }
    }

    public function index(){
        $tweets = \DB::table('tweet') ->get();
        return view('showTweets', ['tweets' => $tweets]);
    }

    function addTweet(request $request){//a request object with its variable name(which can be named anything). We dont need to write it twice its just nice to let others know we are using the request object.
        \DB::insert("INSERT INTO tweet (author, content) VALUES ('$request->author','$request->content')");
        $tweets = \DB::table('tweet') ->get();
        return view('showTweets', ['tweets' => $tweets]);
    }
    function deleteTweet(Request $request){//we write request because it is a post-request we are using in our router.
        \DB::delete("DELETE FROM tweet WHERE id='$request->id'");
        $tweets = \DB::table('tweet') ->get();
        return view('showTweets', ['tweets' => $tweets]);
    }
    function editTweet(Request $request){
        \DB::select("SELECT * FROM tweet WHERE id='$request->id'");
        $tweets = \DB::table('tweet')->find($request->id);
        return view('editTweet', ['tweets' => $tweets]);
}
    function saveTweet(Request $request){
        \DB::update("UPDATE tweet SET author='$request->author', content='$request->content' WHERE id='$request->id'");
        $tweets = \DB::table('tweet')->get();
        return view('showTweets', ["tweets" => $tweets[$request->id]]);
}
}
