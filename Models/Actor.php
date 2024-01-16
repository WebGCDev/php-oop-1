<?php
class Actor
{
    public $producer;
    public $actor;
    public $nonmain_actor;

    function __construct($_producer, $_actor, $_nonmain_actor)
    {
        $this->producer = $_producer;
        $this->actor = $_actor;
        $this->nonmain_actor = $_nonmain_actor;
    }

    function printFullActor()
    {
        return $this->producer . '<p>' . $this->actor . '<p>' . $this->nonmain_actor;
    }
}
