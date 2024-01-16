<?php
class Film
{
    public $film;
    public $actor;
    public $characteristic;

    function __construct($_film, Actor $_actor, Characteristic $_characteristic)
    {
        $this->film = $_film;
        $this->actor = $_actor;
        $this->characteristic = $_characteristic;
    }
}
