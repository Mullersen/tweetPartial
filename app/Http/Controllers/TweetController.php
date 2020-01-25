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
    function show(){
        return view('showTweets',  ["allTweets" => $this->tweets]);//were in a class, so when we want to access the variable we need to write this.
    }
    function showTweet($id){//the show function has to take in a function that specifies which post we want to show.
        if ($id > sizeOf($this->tweets)){
            return view ('tweetError');
        } else{
        return view('showTweets', ["allTweets" => [$this->tweets[$id]]]);
        }
    }

}
