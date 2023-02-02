<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculo de UV</title>
</head>
<body style="background-image: url('img/marmol.jpg');">
    <table>
        <tr>
            <td>
                <form onsubmit="onFormSubmit()" method="post">
                    <div>
                            <label for="">Ingrese Su nombre:</label>
                            <br>
                            <input type="text" name="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div>
                            <label for="">Calculo Integral:</label>
                            <br>
                            <input type="text" name="nota_1" placeholder="Ingrese la nota" required>
                    </div>
                    <div>
                            <label for="">Cinematica de Particulas:</label>
                            <br>
                            <input type="text" name="nota_2" placeholder="Ingrese la nota"required>
                    </div>
                    <div>
                            <label for="">Programacion Orientada a Objetos:</label>
                            <br>
                            <input type="text" name="nota_3" placeholder="Ingrese la nota"required>
                    </div>
                    <div>
                            <label for="">Interconeccion de Redes de Datos:</label>
                            <br>
                            <input type="text" name="nota_4" placeholder="Ingrese la nota"required>
                    </div>
                    <div>
                            <label for="">Pensamiento Social y Cristiano:</label>
                            <br>
                            <input type="text" name="nota_5" placeholder="Ingrese la nota" required>
                    </div>

                    <div class="form_action--button">
                        <input type="submit" value="Enviar Notas" name="enviar">
                        
                    </div>
                </form>

                <td>
                <?php
                //Se verifica si la varia 'enviar' esta con el valor de "set" para que no ocurra un error
                if(isset($_POST['enviar'])){

                    //valor de las variables tomadas a partir de los inputs
                    $nota1 = $_POST["nota_1"];
                    $nota2 = $_POST["nota_2"];
                    $nota3 = $_POST["nota_3"];
                    $nota4 = $_POST["nota_4"];
                    $nota5 = $_POST["nota_5"];
                    $nombre = $_POST["nombre"];

                    //calculo del CUM 
                    //Se multiplica las notas obtenidas en los inputs
                    //por sus UV las cuales son constantes, y se suman los resultados
                    $sumatoria_n = ($nota1 * 5) + ($nota2 * 4) + ($nota3 * 4) + ($nota4 * 2) + ($nota5 * 2);
                    //ahora se suman las UV 
                    $sumatoria_uv = 5 + 4 + 4 + 3 + 3;
                    //se hace la division de estas 2 sumatorios y tendriamos el CUM
                    $CUM = round(($sumatoria_n / $sumatoria_uv), 2);


                    if(empty($nota1)||empty($nota2)||empty($nota3)||empty($nota4)||empty($nota5)){
                        echo '<script language="javascript">alert("DEBES INGRESAR TODAS LAS NOTAS");</script>';
                    }
                    else{
                    echo"<table class=\"tg\">";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<h4 style=\"padding:0 41px;\">" . "Hola, " . $nombre . "</h4>";
                            echo "<th class=\"tg-amwm\">MATERIA</th>";
                            echo "<th class=\"tg-amwm\">CAI</th>";
                            echo "<th class=\"tg-amwm\">CDP</th>";
                            echo "<th class=\"tg-amwm\">POO</th>";
                            echo "<th class=\"tg-1wig\">IRD</th>";
                            echo "<th class=\"tg-amwm\">PSC</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        echo "<tr>";
                            echo "<td class=\"tg-amwm\">NOTA</td>";
                            echo "<td class=\"tg-baqh\">$nota1</td>";
                            echo "<td class=\"tg-baqh\">$nota2</td>";
                            echo "<td class=\"tg-baqh\">$nota3</td>";
                            echo "<td class=\"tg-0lax\">$nota4</td>";
                            echo "<td class=\"tg-baqh\">$nota5</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td class=\"tg-amwm\">UV</td>";
                            echo "<td class=\"tg-baqh\">5</td>";
                            echo "<td class=\"tg-baqh\">4</td>";
                            echo "<td class=\"tg-baqh\">4</td>";
                            echo "<td class=\"tg-0lax\">3</td>";
                            echo "<td class=\"tg-baqh\">3</td>";
                        echo "</tr>";
                        echo "</tbody>";
                    echo "</table>";
                    
                    echo"<table class=\"tg\">";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th class=\"tg-amwm\">CUM</th>";
                            echo "<th class=\"tg-amwm\">UNIDADES VALORATIVAS A CURSAR</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        echo "<tr>";
                        //PARA SABER CUANTAS UNIDADES VALORATIVAS PODRA CURSAR EN EL CICLO 
                        if($CUM>=7.5){
                            echo "<td class=\"tg-amwm\">$CUM</td>";
                            echo "<td class=\"tg-baqh\">Podra cursar 32 Unidades Valorativas</td>";
                        }
                        elseif($CUM>=7.0 && $CUM<7.5){
                            echo "<td class=\"tg-amwm\">$CUM</td>";
                            echo "<td class=\"tg-baqh\">Podra cursar 24 Unidades Valorativas</td>";
                        }
                        elseif($CUM<7.0){
                            echo "<td class=\"tg-amwm\">$CUM</td>";
                            echo "<td class=\"tg-amwm\">Podra cursar 20 Unidades Valorativas</td>";
                        }
                            
                        echo "</tr>";
                        echo "</tbody>";
                    echo "</table>";
                    }
                }
            

                
                ?>
                </td>
            </td>            
        </tr>
    </table>
</body>
</html>