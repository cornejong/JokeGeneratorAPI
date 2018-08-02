<?php

namespace Generator;

class Joke
{
    public function __construct()
    {
        $this->jokesLocation = './jokes.json';
        $this->jokes = json_decode(file_get_contents($this->jokesLocation), true);
    }

    public function getRandomJoke()
    {
        return $this->jokes[rand(0, count($this->jokes) - 1)];
    }
}
