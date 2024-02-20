<?php 
    include 'data/hotels.php';
?>



<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Leonardo Olia">
    <title>Hotel</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<div class="container mt-5">
    <h1>Hotel</h1>
    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
         </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) :?>
                <tr>               
                    <td><?= $hotel['name'] ?></td>
                    <td><?= $hotel['description']?></td>
                    <td><?= $hotel['parking']?></td>
                    <td><?= $hotel['vote']?></td>
                    <td><?= $hotel['distance_to_center']?></td>
                </tr>

            <?php endforeach?>        
        </tbody>
    </table>
</div>
</body>

</html>