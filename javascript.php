<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Balog Bálint">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>JavaScript - Programozási Nyelvek</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h1>JavaScript</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript Logo"
         class="logo">
    <h2>Leírás</h2>
    <p>A JavaScript egy magas szintű, dinamikus programozási nyelv, amelyet elsősorban webfejlesztéshez használnak.
        Brendan Eich fejlesztette ki 1995-ben.</p>

    <h2>Előnyök</h2>
    <ul>
        <li>Széles körben támogatott böngészők által</li>
        <li>Könnyen integrálható HTML és CSS kódokkal</li>
        <li>Interaktív weboldalak készítéséhez ideális</li>
    </ul>

    <h2>Hátrányok</h2>
    <ul>
        <li>Biztonsági kockázatok a kliens oldali futtatás miatt</li>
        <li>Eltérő böngésző implementációk</li>
    </ul>

    <h2>Kód Példa</h2>
    <pre><code class="language-javascript">
function helloWorld() {
    console.log("Hello, World!");
}
helloWorld();
        </code></pre>

    <h2>További Információk</h2>
    <p>További információkat találhat a <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
                                           target="_blank">MDN JavaScript oldalon</a>.</p>

    <h2>Táblázat</h2>
    <table>
        <tr>
            <th>Verzió</th>
            <th>Kiadás Dátuma</th>
        </tr>
        <tr>
            <td>ECMAScript 6 (ES6)</td>
            <td>2015-06-17</td>
        </tr>
        <tr>
            <td>ECMAScript 7 (ES7)</td>
            <td>2016-06-17</td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>
</body>
</html>