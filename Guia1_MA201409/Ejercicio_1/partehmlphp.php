<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripts con (X)HTML y PHP</title>
    <!--Definiendo una hoja de estilo local-->
    <link rel="stylesheet" href="css/htmlphp.css">
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/prefixfree.min.js"></script>
</head>
<body>
<div class="wrap">
    <header>
        <h1>Demostracion de HTML y PHP</h1>
    </header>

    <!--pARTE DE LA PAGINA WB GENERADA CON HTML-->

    <section class="main">
        <article id=html>
            <div class="text">
                <p>
                    &lt;!DOCTYPE html&gt;<br />
                    &lt;html&gt;<br />
                    ...
                </p>
                <p>Parte de HTML normal.</p>
                <p>
                    &lt;/html&gt;
                </p>
            </div>
            <div class="img">
                <img src="img/html5.png" alt="Logo de HTML5"/>
            </div>
        </article>

        <?php
        #parte de la pagina generada con lenguaje PHP

        echo "<article id=\"php\">\n";
        echo "<div class=\"text\">";
        echo "<p>&lt;?php<br />";
        echo "Parte con PHP.</p>";
        echo "</div>";
        echo "<div class=\"img\">";
        echo "<img src=\"img/php.png\" alt=\"Logo de HTML5\" />";
        echo "</div>";
        echo "\n</article>\n";
        ?>
    </section>
    
</div>  
</body>
</html>