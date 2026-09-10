<?php

$messages = [
    ['name' => 'はな', 'body' => 'こんばんは'],
    ['name' => 'そら', 'body' => 'こんばんは。いま練習しています'],
    ['name' => 'はな', 'body' => 'わたしもです'],
];

foreach ($messages as $message) {
    echo $message['name'] . ': ' . $message['body'] . "\n";
}
