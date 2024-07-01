<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your Name">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>Kezdőlap - Programozási Nyelvek</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h1 class="animate__animated animate__bounceIn">Üdvözlöm a programozási nyelvekről szóló oldalon</h1>
    <p id="rainbow-date"><?php echo "Mai dátum: " . date("Y-m-d"); ?></p>
</main>
<?php include 'footer.php'; ?>
<script>
    function rainbow(element) {
        let text = element.textContent;
        const colors = ['#FF0000', '#FF7F00', '#FFFF00', '#00FF00', '#0000FF', '#4B0082', '#8B00FF'];
        let colorIndex = 0;

        function changeColors() {
            let rainbowText = '';
            for (let char of text) {
                rainbowText += `<span style="color: ${colors[colorIndex]}">${char}</span>`;
                colorIndex = (colorIndex + 1) % colors.length;
            }
            element.innerHTML = rainbowText;
            colorIndex = (colorIndex + 1) % colors.length;
        }

        setInterval(changeColors, 500);
        changeColors();
    }

    document.addEventListener('DOMContentLoaded', () => {
        const dateElement = document.getElementById('rainbow-date');
        rainbow(dateElement);
    });
</script>
</body>
</html>
