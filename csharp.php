<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Balog Bálint">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>C# - Programozási Nyelvek</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h1>C#</h1>
    <img src="https://seeklogo.com/images/C/c-sharp-c-logo-02F17714BA-seeklogo.com.png" alt="C# Logo" class="logo">
    <h2>Leírás</h2>
    <p>A C# (ejtsd: „C-sharp”) egy általános célú, több paradigmát támogató programozási nyelv, amelyet az 2000-es évek
        elején fejlesztett ki a Microsoft a .NET keretrendszer részeként.</p>

    <h2>Előnyök</h2>
    <ul>
        <li>Jó integráció a Windows környezettel és a .NET keretrendszerrel</li>
        <li>Erős típusellenőrzés és automatikus memóriakezelés</li>
        <li>Modern nyelvi funkciók</li>
    </ul>

    <h2>Hátrányok</h2>
    <ul>
        <li>Elsősorban Windows környezetben használják</li>
        <li>Viszonylag nagy memóriaköltség</li>
    </ul>

    <h2>Kód Példa</h2>
    <pre><code class="language-csharp">
using System;

class Program {
    static void Main() {
        Console.WriteLine("Hello, World!");
    }
}
        </code></pre>

    <h2>További Információk</h2>
    <p>További információkat találhat a <a href="https://docs.microsoft.com/en-us/dotnet/csharp/" target="_blank">hivatalos
            C# dokumentációban</a>.</p>

    <h2>Táblázat</h2>
    <table>
        <tr>
            <th>Verzió</th>
            <th>Kiadás Dátuma</th>
        </tr>
        <tr>
            <td>C# 7.0</td>
            <td>2017-03-07</td>
        </tr>
        <tr>
            <td>C# 8.0</td>
            <td>2019-09-23</td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>
</body>
</html>