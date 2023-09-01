<?php

class Movie
{
    // ATTRIBUTI
    public $title ;
    public $genres = [];
    public $actors ;
    public $language ;
    public $img ;
    private $active;
    
    // COSTRUTTORE
    public function __construct(
        $_title,
        $_genres,
        $_actor , 
        $_language , 
        // $_img
    )
    {
        $this->title = $_title;
        $this->genres = $_genres;
        $this->actors = $_actor;
        $this->language = $_language;
        // $this->img = $_img;
    }

    // METODI
    public function getTitle() {
        return $this->title;
    }

    public function getGenres() {
        return $this->genres;
    }

    public function addGenre($genre) {
        $this->genres[] = $genre;
    }
}