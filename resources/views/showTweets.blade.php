<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweets</title>
</head>
<body>
    <p>This is the tweets page!</p>
    <?php
    //print_r($allTweets)
    //print_r($allTweets[0])
    foreach ($allTweets as $tweet){ //$tweet is now an associative array (because all tweets was an array containing an associative array)
        echo("<p>" . $tweet['content'] . "</p>");
        echo("<p><strong>" . $tweet['author'] . "</strong></p>");
    }
    ?>
</body>
</html>
