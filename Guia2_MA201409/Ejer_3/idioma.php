<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detector de Lenguaje del Navegador</title>
    <link rel="stylesheet" href="css/idioma.css">
</head>
<body>
    <div class="wrapper">

    <header>
        <h1 class="emboss">Idioma del navegador</h1>
    </header>
    <section>
        <?php
        //Antes de nada introduciremos mensajes en forma de variables
        $español = "Hola";
        $ingles = "Hello";
        $aleman = "Hallo";
        $frances = "Bonjour";
        $italiano = "Ciao";
        $portugues = "Olá";

        //Ahora leemos del navegador cual es su lengua oficial
        
        $completo = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
        $idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2);

        //formulamos las posibilidades que se puede dar 
        echo "<p>" . $completo . "<br>";
        echo $idioma ."</p>\n";

        if($idioma=="es"){
            echo '<p class="msgOff">';
            printf("El lenguaje que se esta utilizando en el navegador es el Español: %s </p>\n", $español);
        }
        elseif($idioma=="fr"){
            echo '<p class="msgOff">';
            printf("El lenguaje que se esta utilizando en el navegador es el Frances: %s </p>\n", $frances);
        }
        elseif($idioma=="en"){
            echo '<p class="msgOff">';
            printf("El lenguaje que se esta utilizando en el navegador es el Ingles: %s </p>\n", $ingles);
        }
        elseif($idioma=="de"){
            echo '<p class="msgOff">';
            printf("El lenguaje que se esta utilizando en el navegador es el Aleman: %s </p>\n", $aleman);
        }
        if($idioma=="it"){
            echo '<p class="msgOff">';
            printf("El lenguaje que se esta utilizando en el navegador es el Italiano: %s </p>\n", $italiano);
        }
        if($idioma=="pt"){
            echo '<p class="msgOff">';
            printf("El lenguaje que se esta utilizando en el navegador es el Portugues: %s </p>\n", $portugues);
        }
        else{
            echo '<p class="msgOff">';
            echo "El idioma del navegador es desconocido.</p>\n";
        }
        
        ?>
    </section>
    </div>
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/switchclass.js"></script>
</html>