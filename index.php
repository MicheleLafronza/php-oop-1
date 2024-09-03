<?php

require_once __DIR__ . '/model/Cast.php';
require_once __DIR__ . '/model/Movie.php';
require_once __DIR__ . '/data/movie_db.php';

var_dump($movie_db);



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

            <!-- card -->
            <div class="card col-4">

                <img src="..." class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>

            <!-- card -->
            <div class="card col-4">

                <img src="..." class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>

            <!-- card -->
            <div class="card col-4">

                <img src="..." class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>

            </div>
            
        </div>
        
    </div>
</div>

    
</body>
</html>