<?php
session_start();

if($_SESSION['logueado']==true){
    
    echo '<html>
    <head>
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <form action="comprobar.php" method="post">

    </head>

    <body>
        <h1 id="menu">Men&#250;</h1>
        <nav>
            <ul>
                <li><a href="../privado1/tiradaDados.php">TIRADA</a></li>
                <li><a href="../privado2/sumar7.php">SUMA 7</a></li>
                <li><a id="seleccionado" href="#">PAR/IMPAR</a></li>
                <li><a href="#">ACERCA DE</a></li>
            </ul>
        </nav>

        <div id="tirada">
        
        <h2> Suma dados PAR/IMPAR </h2>
        
        <label class="container">PAR
        <input type="radio" checked name="paridad" value="0">
        <span class="checkmark"></span>
        </label>

        <label class="container">IMPAR
        <input type="radio" name="paridad" value="1">
        <span class="checkmark"></span>
        </label>

        <br/><input id="comprobar" type="submit" value="COMPROBAR" onClick="location.reload();" >
        
        </div>

    </body>

    </html>';

}else{
    header('Location: ../index.php');
}
?>