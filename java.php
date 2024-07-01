<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Balog Bálint">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>Java - Programozási Nyelvek</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h1>Java</h1>
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/30/Java_programming_language_logo.svg/800px-Java_programming_language_logo.svg.png" alt="Java Logo" class="logo">
    <h2>Leírás</h2>
    <p>A Java egy magas szintű, osztály alapú, objektum-orientált programozási nyelv, amelyet a Sun Microsystems fejlesztett ki, és 1995-ben jelent meg.</p>

    <h2>Előnyök</h2>
    <ul>
        <li>Platformfüggetlenség a Java Virtual Machine (JVM) révén</li>
        <li>Széles körben használt nagyvállalati alkalmazásokhoz</li>
        <li>Kiterjedt közösségi támogatás</li>
    </ul>

    <h2>Hátrányok</h2>
    <ul>
        <li>Relatíve lassabb futási sebesség</li>
        <li>Nagy memóriahasználat</li>
    </ul>

    <h2>Kód Példa</h2>
    <pre><code class="language-java">
public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, World!");
    }
}
        </code></pre>

    <h2>További Információk</h2>
    <p>További információkat találhat a <a href="https://www.java.com" target="_blank">hivatalos Java weboldalon</a>.</p>

    <h2>Táblázat</h2>
    <table>
        <tr>
            <th>Verzió</th>
            <th>Kiadás Dátuma</th>
        </tr>
        <tr>
            <td>Java SE 8</td>
            <td>2014-03-18</td>
        </tr>
        <tr>
            <td>Java SE 11</td>
            <td>2018-09-25</td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>
</body>
</html>