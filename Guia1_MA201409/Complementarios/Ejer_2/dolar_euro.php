<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <title>Conversor de moneda</title>
</head>

<body style="background-image: url(./img/fondo_azul.jpg);background-repeat: no-repeat;background-size: 1540px 720px">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 py-5"> 
                <div class="card">
                    <div class="card-header" style="text-align: center; font-weight: bold;">
                        Conversor de $-Dolar a €-Euro
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="numero" class="form-label" style="font-weight: bold;">Ingrese el numero:</label>
                                <input type="text" name="numero" id="numero" class="form-control" placeholder="$" style="font-weight: bold;" required>
                            </div>
                            <input type="submit" name="calcular" value="Calcular" class="btn btn-success"/>
                        </form>

                        <?php

                            //variable de equivalencia de 1USD = 1EUR /// 1USD= 0,918497 EUR
                            $change=0.918497;
                            

                            if(isset($_POST['calcular'])){
                                $numero = floatval ($_POST['numero']);
                                if(empty($numero)||!is_numeric($numero)||$numero<=0){
                                    echo "<div class='alert alert-danger'>Debes ingresar unicamente numeros positivos y mayores a cero </div>";
                                   

                                }
                                else{
                                    $cantidad=$numero;
                                    $resultado=$cantidad*$change;
                                                                           
                                    
                                    echo "<div class=\"container\">";
                                        echo "<div class=\"data\">";                                    
                                        echo "<table class=\"table\">";
                                            echo "<thead>";
                                            echo "<tr>";            
                                                echo "<th scope=\"col\" style=\"text-align: center\">Cantidad en Dolares</th>";
                                                echo "<th scope=\"col\" style=\"text-align: center\">Cantidad en Euros</th>";
                                            echo "</tr>";
                                            echo "</thead>";
                                            echo "<tbody class=\"table-group-divider\">";
                                            echo "<tr>";
                                                echo "<td style=\"text-align: center\">\$ $cantidad</td>";
                                                echo "<td style=\"text-align: center\">€ ";
                                                echo round("$resultado",2);
                                                echo "</td>";            
                                            echo "</tr>";                   
                                            echo "</tbody>";
                                        echo "</table>";
                                        echo "</div>";     
                                    echo "</div>";                   
                                    }
                            }

                        ?>
   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>