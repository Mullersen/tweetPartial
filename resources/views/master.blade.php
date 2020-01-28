<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        }
        #headergrid{
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
        padding: 10vh 20vw 10vh 20vw;
        border-bottom: solid 1px grey;
        align-items: center;
        justify-items: center;
        background-color: antiquewhite
        }
        #links{
            text-decoration: none;
            text-align: center;
            padding: 10px 20px;
            background-color: darksalmon;
            color: black;
            font-size: 1.5rem;
            }
        #links:hover{
            text-decoration: underline;
        }
        #headerHeadline{
            font-size: 1.5rem;
        }
        #contentsection{
            display: grid;
            grid-template-columns: 20vw 77vw;
            grid-template-rows: 1fr;
            align-items: center;
            justify-items: center;
            margin-bottom: 10vh;
        }
        .rightGridContent{
            padding-top: 5vh;
            padding-left: 3vw;
            background-color: beige;
            border-left: solid 1px grey;
            border-bottom: solid 1px grey;
        }
        #sidebar{
            padding:50vh 0vw 50vh 0vw;
        }
        .tweetsHeader{
            text-align: center;
            margin-top: 5vh;
        }
        .tweetContent{
            white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
            white-space: -pre-wrap;      /* Opera 4-6 */
            white-space: -o-pre-wrap;    /* Opera 7 */
            white-space: pre-wrap;       /* css-3 */
            word-wrap: break-word;       /* Internet Explorer 5.5+ */
            white-space: -webkit-pre-wrap; /* Newer versions of Chrome/Safari*/
            word-break: break-all;
            white-space: normal;
            margin: 10vh 0vw 2vh 0vw;
        }
        .button{
            border: solid grey 1px;
            font-size: 1.0rem;
            padding: 1vh;
            width: 20%;
        }
        #footer{
            text-align: center;
            font-size: 1.3rem;
            margin-bottom: 3vh;
        }
        .form{
            margin: 2vh 0vw 2vh 3vw;
        }
        #textarea{
            width: 50vw;
            overflow-wrap: break-word;
            padding: 0vh 0vw 30vh 0vw;
        }
        .forminput{
            margin: 0vh 0vw 1vh 3vw;
            padding: 0vh 0vw 10vh 0vw;
        }

    </style>
</head>
    <body>
        @yield('header')
        @yield('sidebar')
        @yield('content')
        @include('footer')
   </body>
</html>
