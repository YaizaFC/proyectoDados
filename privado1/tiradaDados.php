<?php
session_start();

if($_SESSION['logueado']==true){
    
    echo '<html>

    <head>
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    </head>

    <body>
        <h1 id="menu">Men&#250;</h1>
        <nav>
            <ul>
                <li><a id="seleccionado" href="#">TIRADA</a></li>
                <li><a href="../privado2/sumar7.php">SUMA 7</a></li>
                <li><a href="../privado3/parImpar.php">PAR/IMPAR</a></li>
                <li><a href="#">ACERCA DE</a></li>
            </ul>
        </nav>';

    echo '<div id="tirada">';
    echo '<h2> Tirada de dados </h2>';

    for ($i = 0; $i < 5; $i++) {
        $numero = rand(1, 6);

        switch ($numero) {
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
    }

    echo '<br/><input id="tirar" type="reset" value="VOLVER A TIRAR" onClick="location.reload();" >';
    echo '</div></body></html>';

}else{
    header('Location: ../index.php');
}
?>


