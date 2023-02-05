<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculo de potencias </title>
</head>
<body>


    <form method="post" class="frame">        
        <div class="form">        
        <h4 class="h_4" style="text-align: center;">CALCULAR POTENCIAS</h4>
        <label for="numero">Ingrese el numero a potenciar</label><br />
        <input type="number" class="controls" name="base" placeholder="Numero base"><br />
        <label for="potencia">Ingrese el valor del exponente</label><br />
        <input type="number" class="controls" name="potencia" placeholder="Numero exponente"><br />
        <!---<input type="submit" class="btn_env"name="enviar" value="Enviar">-->
        <button  type="submit" class="btn_env"name="enviar">Enviar</button>
        
        </div>        
    </form>
<?php

    if(isset($_POST['enviar'])){
        $numero=$_POST['base'];
        $exponente=$_POST['potencia'];
        if(empty($numero) || empty($exponente)){ 

            echo "<div class=\"frame\">";
            echo "<div class=\"form_2\">";            
            echo "<h4>Debes de ingresar valores en los campos mostrados</h4>";
            echo "</div>";
            echo "</div>";

        }

        //Si el exponente es igual a 1, se regresaria el mismo numero
        elseif($exponente==1){
            $cont=$numero;
            echo "<div class=\"frame\">";
            echo "<div class=\"form_2\">";
            echo "<h4>El Resultado de elevar ".$numero."^".$exponente.":"."</h4>";
            echo "<h4>$cont</h4>";
            echo "</div>";
            echo "</div>";
            }
        //Si el exponente es igual 0, regresara 1
        elseif($exponente==0){
            $cont=1;
            echo "<div class=\"frame\">";
            echo "<div class=\"form_2\">";
            echo "<h4>El Resultado de elevar ".$numero."^".$exponente.":"."</h4>";
            echo "<h4>$cont</h4>";
            echo "</div>";
            echo "</div>";
            }
        
        
        else{
        
        for ($i = 1;$i<$exponente;$i++){
            if($i==1){
                $cont=$numero;
            }
            $cont=$cont*$numero;
        }
        

        echo "<div class=\"frame\">";
        echo "<div class=\"form_2\">";
        echo "<h4>El Resultado de elevar ".$numero."^".$exponente.":"."</h4>";
        echo "<h4>$cont</h4>";
        echo "</div>";
        echo "</div>";
        }

        

    }
    else{
        # '<script language="javascript">alert("Debes ingresar datos en ambos campos");</script>';
    }
?>
</body>
</html>