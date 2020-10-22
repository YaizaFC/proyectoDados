<?php
// YAIZA FRITIS CALVO- DAW 2 -Despliegue de apliaciones web
// PROYECTO DADOS - 21 de Octubre de 2020

error_reporting(0);

session_start();

$_SESSION['logueado'] = false;

if (isset($_REQUEST['btnLogIn'])){

    $email = htmlspecialchars($_REQUEST['email']);
    $pass = htmlspecialchars($_REQUEST['pass']);

    if ($email=="juan@gmail.com" && $pass=="juan"){

        $_SESSION['logueado'] = true;
        header('Location: menu.php');
    }

}

echo '<head>
    <link href="css/estilo1.css" rel="stylesheet" type="text/css">
    <form name="logIn" method="post" action="">
</head>

<body>
    <p id="nombre">Yaiza Fritis Calvo</p>

    <div id="logIn">
    <header>
        <h1>LOG IN</h1>
    </header>
    <main>
        <input type="email" id="email" name="email" value="" placeholder="Email"><br><br>

        <input type="password" id="pass" maxlength="15" name="pass" value=""placeholder="Password"><br><br>

        <input id="btnLogIn" name="btnLogIn" type="submit" value="Log In">
    </main>
    </div>

</body>

</html>';

