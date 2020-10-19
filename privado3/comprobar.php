<?php
session_start();

if($_SESSION['logueado']==true){
    
    echo '<html>
    <head>
        <link href="estilos2.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="tirada">';

    error_reporting(0);
    $sumaTotal=0;
    $paridad=$_REQUEST['paridad'];

    if($paridad==0){
        echo '<h1> Tu respuesta: es PAR</h1>';
    }else{
        echo '<h1> Tu respuesta: es IMPAR</h1>';
    }
    for ($i = 0; $i < 3; $i++) {
        $numero = rand(1, 6);
        $sumaTotal+=$numero;
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

    if($sumaTotal%2==0){
        $resultado="PAR";
    }else{
        $resultado="IMPAR";
    }

    if ($sumaTotal%2==$paridad){
        echo '<h2>Has acertado. La suma total de los dados es '.$sumaTotal.' y por lo tanto es '. $resultado.'. </h2>';
    }else{
        echo '<h2>No has acertado. La suma total de los dados es '.$sumaTotal.' y por lo tanto es '. $resultado.'. </h2>';
    }

    echo '<input id="tirar" type="reset" value="VOLVER A INTENTAR" onClick="history.go(-1);" >';
    echo '</div>';

}else{
    header('Location: index.php');
}
?>
