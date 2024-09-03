<?php

require_once __DIR__ . '/model/Cast.php';
require_once __DIR__ . '/model/Movie.php';
require_once __DIR__ . '/data/movie_db.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>

    <!-- container -->
    <div class="container">

        <!-- row -->
        <div class="row">

            <?php foreach($movie_db as $film): ?>
            <!-- card -->
            <div class="card col-4">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $film->printTitle() ?></h5>
                    <p class="card-text">Lingua: <?php echo $film->printLang() ?></p>
                    <p class="card-text">Durata: <?php echo $film->printLen() ?></p>

                    <h6 class="card-title">Generi:</h5>
                    <ul>
                        <?php echo $film->printGenresList() ?>
                    </ul>

                    <p class="card-text">Attori Principali: <?php echo $film->cast->getFullCast() ?></p>

                </div>

            </div>
            <!-- fine card -->
             <?php endforeach ?>

            
        </div>
        
    </div>
</div>

    
</body>
</html>