<?php

require_once __DIR__.'/classes/Movie.php';

$filmsOne = new Movie('Notting Hill' , 'romantic' , 'Julia Robert , Hugh Grant , Rhys Ifans , Hugh Bonneville , Gina Mckee , Emma McInnerny' , 'English , Italian , Spanish');
// $filmsOne->title = 'Notting Hill';
// $filmsOne->genre = 'romantic';
// $filmsOne->actors = 'Julia Robert , Hugh Grant , Rhys Ifans , Hugh Bonneville , Gina Mckee , Emma McInnerny';
// $filmsOne->language = 'English , Italian , Spanish';
// $filmsOne->img = 'http...';

$filmsOne->setActive('active');

var_dump($filmsOne);

// echo $filmsOne->title;
echo $filmsOne->getFullInfoFilms();

echo '<br>';

$filmsTwo = new Movie('Orwell 1984','Drammatico','John Hurt , Suzanna Hamilton , Bob Flag , Rupert Baderman ,, Martha Parsey , Roger Lloyd Pack','English , Italian , Spanish');
// $filmsTwo->title = 'Orwell 1984';
// $filmsTwo->genre = 'Drammatico';
// $filmsTwo->actors = 'John Hurt , Suzanna Hamilton , Bob Flag , Rupert Baderman ,, Martha Parsey , Roger Lloyd Pack';
// $filmsTwo->language = 'English , Italian , Spanish';
// $filmsTwo->img = 'http...';

var_dump($filmsTwo);

echo $filmsTwo->getFullInfoFilms();





?>