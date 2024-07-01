<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Balog Bálint">
    <meta name="description" content="A website about programming languages">
    <meta name="robots" content="index, follow">
    <title>C++ - Programozási Nyelvek</title>
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<?php include 'header.php'; ?>
<main>
    <h1>C++</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/612px-ISO_C%2B%2B_Logo.svg.png"
         alt="C++ Logo" class="logo">
    <h2>Leírás</h2>
    <p>A C++ egy magas szintű, általános célú programozási nyelv, amelyet Bjarne Stroustrup fejlesztett ki. Először
        1985-ben jelent meg, és a C nyelv kiterjesztése.<br>Személyesen evvel a program nyelvvel ismerkedtem meg először
        életemben.</p>

    <h2>Előnyök</h2>
    <ul>
        <li>Közvetlen hardver-hozzáférés és alacsony szintű manipuláció</li>
        <li>Kiváló teljesítmény és sebesség</li>
        <li>Széles körben használt rendszer- és alkalmazásfejlesztésben</li>
    </ul>

    <h2>Hátrányok</h2>
    <ul>
        <li>Bonyolult szintaxis és memóriakezelés</li>
        <li>Könnyen keletkezhetnek hibák, mint például memória szivárgás</li>
    </ul>

    <h2>Kód Példa</h2>
    <pre><code class="language-cpp">
#include <iostream>
using namespace std;

int main() {
    cout << "Hello, World!" << endl;
    return 0;
}
        </code></pre>

    <h2>További Információk</h2>
    <p>További információkat találhat a <a href="https://isocpp.org" target="_blank">hivatalos C++ weboldalon</a>.</p>

    <h2>Táblázat</h2>
    <table>
        <tr>
            <th>Verzió</th>
            <th>Kiadás Dátuma</th>
        </tr>
        <tr>
            <td>C++11</td>
            <td>2011-08-12</td>
        </tr>
        <tr>
            <td>C++14</td>
            <td>2014-12-15</td>
        </tr>
    </table>
</main>
<?php include 'footer.php'; ?>
</body>
</html>