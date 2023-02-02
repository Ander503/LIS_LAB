<!DOCTYPE html>
<html lang="es">
<head>
    <title>Calcular Salario</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="css/links.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    
<header id="inset">
    <h1>Detalles del Salario</h1>
</header>


    
<section>
    <article>
        <?php
        if(isset($_POST['enviar'])){
            $empleado =isset($_POST['empleado'])? $_POST['empleado']: "";
            $sueldobase=isset($_POST['sueldobase'])? $_POST['sueldobase']:"";
            
            if(isset($_POST['hextra'])){
                $horasextras= isset($_POST['numhorasex'])? $_POST['numhorasex']: "O";
                $pagohextra=isset($_POST['pagoextra'])? $_POST['pagoextra']: "O";
                $sueldohextra=$horasextras*$pagohextra;
            }
            else{
                $horasextras=0;
                $sueldohextra=0;
            }
            $sueldoneto = $sueldobase + $sueldohextra;
        

        echo "<div>\n<h3>Boleta de pago</h3>\n";
        echo "<table>\n";
        echo "\t<tr>\n\t<th colspan=\"2\">\n\t\t\tDetalles del Pago\n\t\t</th>\n\t</tr>/n";
        echo "\t<tr>\n\t\t<td>\n\t\t\tEl empleado es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$empleado,"\n\t\t\t</td>\n\t\t\t</tr>\n";
        echo "\t<tr>\n\t\t<td>\n\t\t\tEl sueldo Base es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t\$ ", $sueldobase ,"\n\t\t</td>\n\t</tr>\n";
        echo "\t<tr>\n\t\t<td>\n\t\t\tLas horasextra son: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t",$horasextras,"\n\t\t</td>\n\t</tr>\n";
        echo "\t<tr>\n\t\t<td>\n\t\t\tEl pago por horas extra es: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t\$",$sueldohextra,"\n\t\t</td>\n\t</tr>\n";
        echo "\t<tr>\n\t\t<th>\n\t\t\tEl sueldo neto devengado es: \n\t\t</th>\n\t\t<th class=\"number\">\n\t\t\t\$",$sueldoneto,"\n\t\t</th>\n\t</tr>\n";
        echo "</table>\n</div>/n";
    }

        ?>
     <a href="salario.html" class="a-btn">
        <span class="a-btn-symbol">i</span>
        <span class="a-btn-text">Ingresar</span>
        <span class="a-btn-slide-text">Otro empleado</span>
        <span class="a-btn-slide-icon"></span>
     </a>   
    </article>
</section>
</body>
</html>