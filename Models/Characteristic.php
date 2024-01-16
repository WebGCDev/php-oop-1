<?php
class Characteristic
{
    public $film_length;
    public $vm18;
    public $viewing;
    public $grade;


    function __construct($_film_length, $_vm18, $_grade)
    {
        $this->film_length = $_film_length;
        $this->vm18 = $_vm18;
        $this->grade = $_grade;
        $this->WhoCanWatchTheFilm($_vm18);
    }

    function printFullCharacteristic()
    {
        return $this->film_length . '<p>' . $this->viewing . '<p>' . $this->grade;
    }

    public function WhoCanWatchTheFilm($vm18)
    {
        if ($vm18 == true) {
            $this->viewing = 'V.M di 18 anni';
        } else {
            $this->viewing = 'Per tutte le fasce d\'età ';
        }
    }
}
