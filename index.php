<?php 

    include 'data/hotels.php';

    $parking_filter = isset($_GET['hasparking']) ? $_GET['hasparking'] : null;

    if (isset($_GET['clear'])) {
        $parking_filter = null;
    }
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

        <!-- FORM -->
        <h2>Filtra per parcheggio</h2>
        <form method="GET" class="mb-5">
            <!-- Checkbox per parcheggio -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="hasparking" id="parking" value="Con parcheggio">
                <label class="form-check-label" for="parking">
                    Con parcheggio
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="hasparking" id="noparking" value="Senza parcheggio">
                <label class="form-check-label" for="noparking">
                    Senza parcheggio
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Filtra</button>
            <button type="submit" name="clear" class="btn btn-secondary">Cancella filtri</button>

        </form>

        <!-- TABELLA -->
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
                <?php foreach ($hotels as $hotel) :
                    if (!$parking_filter || ($parking_filter == 'Con parcheggio' && $hotel['parking']) || ($parking_filter == 'Senza parcheggio' && !$hotel['parking'])) :
                    ?>

                    
                <tr>
                    <td>
                        <?= $hotel['name'] ?>
                    </td>
                    <td>
                        <?= $hotel['description']?>
                    </td>
                    <td>
                        <?= $hotel['parking'] ? ' &#9989;' : '&#10060;' ?>
                    </td>
                    <td>
                        <?= $hotel['vote']?>
                    </td>
                    <td>
                        <?= $hotel['distance_to_center']?>
                    </td>
                </tr>
                <?php endif ?>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
</body>

</html>