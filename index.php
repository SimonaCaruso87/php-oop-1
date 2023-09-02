<?php

// VISUALIZZAZIONE ERRORI CODICE PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/classes/Movie.php';

$movies = [
    new Movie(
        "Notting Hill" ,
        ["Commedia", "Romantico"],
        ["Julia Robert , Hugh Grant , Rhys Ifans , Hugh Bonneville , Gina Mckee , Emma McInnerny"],
        "Inglese",
        "./img/MV5BMTE5OTkwYzYtNDhlNC00MzljLTk1YTktY2IxZjliZmNjMjUzL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg",
        "Notting Hill è un film del 1999 diretto da Roger Michell.Sceneggiato da Richard Curtis e prodotto da Duncan Kenworthy, reduci dal successo di Quattro matrimoni e un funerale del 1994, la pellicola è una commedia romantica ambientata nell'omonimo quartiere di Londra, che racconta la storia d'amore tra una star del cinema statunitense (Julia Roberts) e un libraio inglese (Hugh Grant). Rhys Ifans, Emma Chambers, Tim McInnerny, Gina McKee e Hugh Bonneville completano il cast degli attori principali del lungometraggio.Il film, che uscì nel Regno Unito il 21 maggio, vinse numerosi premi, tra cui tre Empire Awards e un British Comedy Awards, e ricevette inoltre tre candidature ai Golden Globe.Ben accolto dalla critica, Notting Hill ebbe un ottimo risultato al botteghino: a fronte di un budget di circa 42 milioni di dollari, ottenne oltre 360 milioni di dollari in tutto il mondo, diventando così il film britannico con maggiori incassi nella storia del cinema al momento della sua uscita e il maggior successo cinematografico nel Regno Unito del 1999."
    ),
    new Movie(
        "Horwell 1984",
        ["Drammatico", "Fantascienza"],
        ["Alice Johnson, Bob Brown"],
        "Italiano",
        "data:image/jpeg;base64,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"
    ),
];

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
    <div class="container mt-5">
        <h1>Dettagli del Film</h1>
        <div class="row">
            <div class="col-md-4">
                <!-- Aggiungi il carousel qui -->
                <div id="filmCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($movies as $key => $movie): ?>
                            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                                <img src="<?= $movie->getImg()?>" class="d-block w-100" alt="Poster del Film">
                                <div class="carousel-caption">
                                    <h3><?= $movie->getTitle() ?></h3>
                                    <p><?= implode(', ', $movie->getGenres()) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#filmCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#filmCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <!-- Fine del carousel -->
            </div>
            <div class="col-md-8">
                <table class="table rounded-5">
                    <tbody>
                        <tr>
                            <th scope="row">Titolo:</th>
                            <td><?= $movies[0]->getTitle() ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Generi:</th>
                            <td><?= implode(', ', $movies[0]->getGenres()) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Attori:</th>
                            <td><?= implode(', ', $movies[0]->getActors()) ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Lingua:</th>
                            <td><?= $movies[0]->getLanguage()?></td>
                        </tr>
                        <tr>
                            <th scope="row">Trama:</th>
                            <td><?= $movies[0]->getPlot()?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


            <!-- JS LINK -->
            <script type="text/javascript" src='js/scripts.js'></script> 
        </body>
</html>