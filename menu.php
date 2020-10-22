<?php
// YAIZA FRITIS CALVO- DAW 2 -Despliegue de apliaciones web
// PROYECTO DADOS - 21 de Octubre de 2020
session_start();

if($_SESSION['logueado']==true){
    
echo '<html>

<head>
    <link href="css/estilo2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <h1 id="menu">Men&#250;</h1>
    <nav>
        <ul>
            <li><a href="privado1/tiradaDados.php">TIRADA</a></li>
            <li><a href="privado2/sumar7.php">SUMA 7</a></li>
            <li><a href="privado3/parImpar.php">PAR/IMPAR</a></li>
            <li><a href="acercaDe.html">ACERCA DE</a></li>
        </ul>
    </nav>
</body>

</html>';
}else{
    header('Location: index.php');
}
?>