<?php

require_once __DIR__.'/classes/Movie.php';

$filmsOne = new Movie('Notting Hill' ,["Commedia", "Drammatico"] ,'Julia Robert , Hugh Grant , Rhys Ifans , Hugh Bonneville , Gina Mckee , Emma McInnerny' , 'English , Italian , Spanish');
// $filmsOne->title = 'Notting Hill';
// $filmsOne->genre = 'romantic';
// $filmsOne->actors = 'Julia Robert , Hugh Grant , Rhys Ifans , Hugh Bonneville , Gina Mckee , Emma McInnerny';
// $filmsOne->language = 'English , Italian , Spanish';
// $filmsOne->img = 'http...';


var_dump($filmsOne);

// echo $filmsOne->title;

echo '<br>';

$filmsTwo = new Movie('Orwell 1984',["Commedia", "Drammatico"],'John Hurt , Suzanna Hamilton , Bob Flag , Rupert Baderman ,, Martha Parsey , Roger Lloyd Pack','English , Italian , Spanish');
// $filmsTwo->title = 'Orwell 1984';
// $filmsTwo->genre = 'Drammatico';
// $filmsTwo->actors = 'John Hurt , Suzanna Hamilton , Bob Flag , Rupert Baderman ,, Martha Parsey , Roger Lloyd Pack';
// $filmsTwo->language = 'English , Italian , Spanish';
// $filmsTwo->img = 'http...';

var_dump($filmsTwo);

$movie = new Movie ("Titanic", ["Romantico" , "Fantasy"] , null , null);
$movie->addGenre('Azione');

echo "Titolo del film: " . $movie->getTitle() . "<br>";
echo "Generi del film: " . implode(", ", $movie->getGenres());


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- FONT-AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- AXIOS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- VUE -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- CSS -->
        <link rel='stylesheet' href='./css/style.css'>

        <title>OOP - Programmazione ad Oggetti </title>

    </head>

        <body>

            

            <!-- JS LINK -->
            <script type="text/javascript" src='js/scripts.js'></script> 
        </body>
</html>