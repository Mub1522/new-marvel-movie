<?php require('main.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next-Movie-Marvel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <main class="container">
        <h1>Proxima Pelicula de Marvel 🎬</h1>
        <h2><?= $data['title'] ?></h2>
        <p>Tipo: <?= $data['type'] ?></p>
        <p>Estreno: <?= $data['release_date'] ?></p>
        <p><?= $data['overview'] ?></p>
        <img src="<?= $data['poster_url'] ?>" alt="poster" class="poster">
        <hr>
        <h2>Se estrena en: <?= $data['days_until'] ?> dias ⏰</h2>
    </main>
    <hr>
    <main class="container">
        <h2>Siguiente Produccion 🎥</h2>
        <h2><?= $data['following_production']['title'] ?></h2>
        <p>Tipo: <?= $data['following_production']['type'] ?></p>
        <p>Estreno: <?= $data['following_production']['release_date'] ?></p>
        <p><?= $data['following_production']['overview'] ?></p>
        <img src="<?= $data['following_production']['poster_url'] ?>" alt="poster" class="poster">
        <hr>
        <h2>Se estrena en: <?= $data['following_production']['days_until'] ?> dias ⏰</h2>
    </main>
    <hr>
    <main class="api_data">
        <pre>
            <?= var_dump($data) ?>
        </pre>
    </main>
</body>

</html>