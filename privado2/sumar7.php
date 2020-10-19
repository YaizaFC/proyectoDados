
<html>

<head>
    <link href="estilos2.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
    <h1 id="menu">Men&#250;</h1>
    <nav>
        <ul>
            <li><a href="../privado1/tiradaDados.php">TIRADA</a></li>
            <li><a id="seleccionado" href="#">SUMA 7</a></li>
            <li><a href="../privado3/parImpar.php">PAR/IMPAR</a></li>
            <li><a href="#">ACERCA DE</a></li>

        </ul>

    </nav>

    <div id="tirada">
    <h2> Sumar 7 </h2>

    <?php



$primerGenerado=0;
$segundoGenerado=0;
$intentos=0;

do{
    $primerGenerado = rand(1, 6);
    $segundoGenerado=rand(1, 6);
    $intentos++;
    
}while ($primerGenerado+$segundoGenerado!=7);


switch ($primerGenerado) {
    case 1:

        echo '<img src="../img/uno.png" witdh="85px" height="85px">';
        break;

    case 2:

        echo '<img src="../img/dos.png" witdh="90px" height="90px">';
        break;

    case 3:

        echo '<img src="../img/tres.png" witdh="90px" height="90px">';
        break;

    case 4:

        echo '<img src="../img/cuatro.png" witdh="90px" height="90px">';
        break;

    case 5:
        
        echo '<img src="../img/cinco.png" witdh="90px" height="90px">';
        break;

    case 6:

        echo '<img src="../img/seis.png" witdh="90px" height="90px">';
        break;
}

switch ($segundoGenerado) {
    case 1:

        echo '<img src="../img/uno.png" witdh="85px" height="85px">';
        break;

    case 2:

        echo '<img src="../img/dos.png" witdh="90px" height="90px">';
        break;

    case 3:

        echo '<img src="../img/tres.png" witdh="90px" height="90px">';
        break;

    case 4:

        echo '<img src="../img/cuatro.png" witdh="90px" height="90px">';
        break;

    case 5:
        
        echo '<img src="../img/cinco.png" witdh="90px" height="90px">';
        break;

    case 6:

        echo '<img src="../img/seis.png" witdh="90px" height="90px">';
        break;
}
echo '<h2>La suma es 7 es '.$primerGenerado. '+'.$segundoGenerado.' en '. $intentos. ' intentos</h2>';
echo '<br/><input id="tirar" type="reset" value="VOLVER A TIRAR" onClick="location.reload();" >';
echo '</div>';

?>
</body>

</html>
