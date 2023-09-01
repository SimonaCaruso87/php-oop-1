<?php

class Movie{

    public $title ;
    public $genre ;
    public $actors ;
    public $language ;
    public $img ;

    // public function __construct(
    //     $genre ,
    //     $actor , 
    //     $language , 
    //     $img
    // )
    // {
    //     $this->genre = $genre;
    //     $this->actors = $actor;
    //     $this->language = $language;
    //     $this->img = $img;
    // }
}

$films = new Movie();
$films->title = 'Notting Hill';
$films->genre = 'romantic';
$films->actors = 'Julia Robert , Hugh Grant , Rhys Ifans , Hugh Bonneville , Gina Mckee , Emma McInnerny';
$films->language = 'English , Italian , Spanish';
$films->img = 'http...';

var_dump($films);

echo $films->genre;



?>