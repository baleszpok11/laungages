<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your Name">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>Programming Languages</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Kezdőlap</a></li>
            <li><a href="about.php">Rólam</a></li>
            <li><a href="python.php">Python</a></li>
            <li><a href="favorites.php">Kedvenc oldalak</a></li>
            <li><a href="contact.php">Kapcsolat</a></li>
        </ul>
    </nav>
</header>
<main>
    <h1>Üdvözlöm a programozási nyelvekről szóló oldalon</h1>
    <p><?php echo "Mai dátum: " . date("Y.m.d"); ?></p>
</main>
<?php
include 'footer.php';
?>
</body>
</html>