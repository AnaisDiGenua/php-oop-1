<?php

class Movie {
    public $title;
    public $director;
    public $producer;
    public $genre;
    public $runningTime;
    public $distributor;
    public $budjet;

    public function __construct($_title, $_director, $_producer, $_genre, $_runningTime, $_distributor, $_budjet)
    {
        $this->setTitle($_title);
        $this->director = $_director;
        $this->producer = $_producer;
        $this->genre = $_genre;
        $this->runningTime = $_runningTime;
        $this->distributor = $_distributor;
        $this->budjet = $_budjet;
    }

    public function setTitle($_title)
    {
        if(strlen($_title) > 3) {
            $this->title = $_title;
        }
    }
}

?>