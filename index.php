<?php

require_once 'class.JokesGenerator.php';

$joke = new Generator\Joke;

header('Content-Type: application/json');

print(
    json_encode(
    $joke->getRandomJoke(), JSON_PRETTY_PRINT
    ));

?>