<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    
    <title>Calculo de dias vividos</title>

</head>
<body class="b_ody">


<div style="padding: 10px; float: left; width: 45%; text-align: justify;">
<section class="form-registro">  
       <h3>INGRESO DE EDAD</h3> 
        <form method="post">
            <label for="dia">Dia:<input class="controls" type="text" name="dia" min="1900" onkeypress="return event.charCode>=48 && event.charCode<=57"></label><br />
            <label for="mes">Mes:<input class="controls" type="text" name="mes" min="1900" onkeypress="return event.charCode>=48 && event.charCode<=57"></label><br />
            <label for="año">Año:<input class="controls" type="text" name="año" min="1900" onkeypress="return event.charCode>=48 && event.charCode<=57"></label><br />
            <input type="submit" class="boton_e" name="enviar">
        </form>
    </section>
</div>

<div style="padding: 10px; float: right; width: 45%; text-align: justify;">
        <?php

        if(isset($_POST["enviar"])){
            $day = $_POST["dia"];
            $mes = $_POST["mes"];
            $anio = $_POST["año"];
            if(empty($day)||empty($mes)||empty($anio)){
                echo "<div class='alert alert-danger'>Debes ingresar unicamente numeros positivos y mayores a cero </div>";
                
            }

            elseif($anio%4==0 and ($anio%100!=0 or $anio%400==0)){
                $calculo_a =(date("Y") - $anio);
                $lived_days =(date("Y")-$anio)*366;          

                echo "<div class=\"form-registro\";>";
                echo "<h1 style=\"text-align: center;\" >AÑO BISIESTO</h1>";
                echo "<table class=\"tabla\"; border=\"1\"; style=\"width: 305px; margin-left: auto; margin-right: auto;\">";
                echo "<tbody>";
                echo "<tr style=\"height: 22px;\">";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">Fecha Nacimiento</td>";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">".$day."/".$mes."/".$anio."</td>";
                echo "</tr>";
                echo "<tr style=\"height: 22px;\">";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">Edad</td>";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">$calculo_a</td>";
                echo "</tr>";
                echo "<tr style=\"height: 22px;\">";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">Dias Vividos&nbsp;</td>";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">$lived_days</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            }

            else{
                $calculo_a =(date("Y") - $anio);
                $lived_days =(date("Y")-$anio)*365;

                echo "<div class=\"form-registro\";>";
                echo "<h1 style=\"text-align: center;\" >AÑO NO BISIESTO</h1>";
                echo "<table border=\"1\"; style=\"width: 305px; margin-left: auto; margin-right: auto;\">";
                echo "<tbody>";
                echo "<tr style=\"height: 22px;\">";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">Fecha Nacimiento</td>";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">".$day."/".$mes."/".$anio."</td>";
                echo "</tr>";
                echo "<tr style=\"height: 22px;\">";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">Edad</td>";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">$calculo_a</td>";
                echo "</tr>";
                echo "<tr style=\"height: 22px;\">";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">Dias Vividos&nbsp;</td>";
                echo "<td style=\"width: 115.375px; text-align: center; height: 22px;\">$lived_days</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
                echo "</div>";
                
               
            }    
        }

?>
</div>




   



</body>
</html>
