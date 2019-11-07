<?php

$ids = file_get_contents('https://hacker-news.firebaseio.com/v0/topstories.json');
print_r($ids);

$items = json_decode($ids, true); // True: array
print_r($items);

$tops = array_slice($items, 0, 5);

foreach ($tops as $id) {
    $story = json_decode(file_get_contents("https://hacker-news.firebaseio.com/v0/item/{$id}.json"));
    print_r($story);
    echo "<a href=\"{$story->url}\">{$story->title}</a> by {$story->by}<br>";
}