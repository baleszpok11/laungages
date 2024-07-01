<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Balog Bálint">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>Python - Programozási Nyelvek</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h1>Python</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python Logo"
         class="logo">
    <h2>Leírás</h2>
    <p>A Python egy magas szintű, általános célú programozási nyelv, amelyet Guido van Rossum fejlesztett ki. Először
        1991-ben jelent meg.</p>

    <h2>Előnyök</h2>
    <ul>
        <li>Könnyen olvasható szintaxis</li>
        <li>Kiterjedt standard könyvtár</li>
        <li>Támogatás a többféle programozási paradigmához</li>
    </ul>

    <h2>Hátrányok</h2>
    <ul>
        <li>Nem olyan gyors, mint a C vagy C++</li>
        <li>Korlátozott mobilfejlesztési lehetőségek</li>
    </ul>

    <h2>Kód Példa</h2>
    <pre><code class="language-python">
def hello_world():
    print("Hello, World!")
hello_world()
        </code></pre>

    <h2>További Információk</h2>
    <p>További információkat találhat a <a href="https://www.python.org" target="_blank">hivatalos Python weboldalon</a>.
    </p>

    <h2>Táblázat</h2>
    <table>
        <tr>
            <th>Verzió</th>
            <th>Kiadás Dátuma</th>
        </tr>
        <tr>
            <td>Python 3.8</td>
            <td>2019-10-14</td>
        </tr>
        <tr>
            <td>Python 3.9</td>
            <td>2020-10-05</td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>
</body>
</html>