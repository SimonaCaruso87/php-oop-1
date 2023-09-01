<?php

class Movie
{
    // ATTRIBUTI
    public $title ;
    public $genre ;
    public $actors ;
    public $language ;
    public $img ;
    private $active;
    
    // COSTRUTTORE
    public function __construct(
        $_genre ,
        $_actor , 
        $_language , 
        $_img
    )
    {
        $this->genre = $_genre;
        $this->actors = $_actor;
        $this->language = $_language;
        $this->img = $_img;
    }

    // METODI
    public function getFullInfoFilms()
    {
        return $this->title.' '.$this->genre;
    }

    /*
       Getter dell'attributo active
    */
    public function getActive()
    {
        return $this->active;
    }
    /*
      Setter dell'attributo active
      Mi aspetto che il parametro active sia un booleano
      Se non è un boolenao non faccio niente
    */
    public function setActive($active)
    {
        if(is_bool($active)){
            $this->active = $active;
        }
        
    }
}