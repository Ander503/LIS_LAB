<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEPE SHOES - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo_cuadro_b.png" type="image/jpg">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mukta+Malar'>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="shortcut icon" href="../img/logo_cuadro_b.png" type="image/x-icon">
</head>
<body>

 <!--Ingresando el nuevo menu-->
 <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #8FBDD3;" id="menu">
        <div class="container-fluid">
            <!--Logo-->
            <a class="navbar-brand" href="../pepe_s.php">
            <img class="logotipo" src="../img/logo_cuadro_b.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../pepe_s.php">Inicio</a>
                </li>
                            
                <li class="nav-item">
                <a class="nav-link active" href="../pages/women.php">Women</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="../pages/men.php">Men</a>
                </li>
                
                <li class="nav-item">
                
                <button class="cta nav-link">
                    <a href="./pages/women.php">
                    <span class="hover-underline-animation"> Shop now </span>
                    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                    </svg>
                    </a>
                </button>
                </li>
                
            </ul>
            
            </div>
        </div>
        </nav>
         
    </header>
    
    <section class="" style="margin-top:100px">
        <table style="width: 780px; height: 36px; margin-left: auto; margin-right: auto;" border="1">
            <tbody>
                <tr style="height: 35.4px;">
                    <td style="width: 133px; height: 35.4px; text-align: center;">&nbsp;Nombre</td>
                    <td style="width: 126px; height: 35.4px; text-align: center;">Talla</td>
                    <td style="width: 128px; height: 35.4px; text-align: center;">&nbsp;Cantidad</td>
                    <td style="width: 128px; height: 35.4px; text-align: center;">&nbsp;Precio U</td>                    
                    <td style="width: 133px; height: 35.4px; text-align: center;">Total + IVA</td>
                    <td style="width: 130px; height: 35.4px; text-align: center;">Costo de envio</td>
                    <td style="width: 130px; height: 35.4px; text-align: center;">TOTAL NETO</td>
                </tr>
            </tbody>
        </table>
    </section>
    
    <!--CARRITO DE COMPRA-->
    <?php
        $cant1=$_POST['c_1'];
        $cant2=$_POST['c_2'];
        $cant3=$_POST['c_3'];
        $cant4=$_POST['c_4'];
        $cant5=$_POST['c_5'];
        $cant6=$_POST['c_6'];
        $cant7=$_POST['c_7'];
        $cant8=$_POST['c_8'];
        $cant9=$_POST['c_9'];
        $cant10=$_POST['c_10'];

        $n1=0;
        $n2=0;
        $n3=0;
        $n4=0;
        $n5=0;
        $n6=0;
        $n7=0;
        $n8=0;
        $n9=0;
        $n10=0;

        $IVA=0.13;
        
        $articulos_1= array();

        if(is_null($cant1)){
            
            echo '<script language="javascript">alert("juas");</script>';
        
        }
        else{
            $nom_zap1=$_POST['NOMBRE_1'];
            $price_1=$_POST['PRECIO_1'];
            $size=$_POST['talla_z1'];
            $cantida_1=$_POST['c_1'];
            

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
                
            );
            if($cant1>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                
            echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                            
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="0";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }

                        $n1=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                        
                        
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
            
        }
    


        if(is_null($cant1)){
           

        }
        else{
            $nom_zap1=$_POST['NOMBRE_2'];
            $price_1=$_POST['PRECIO_2'];
            $size=$_POST['talla_z2'];
            $cantida_1=$_POST['c_2'];
            
            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
            );
            if($cant2>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n2=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";

                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
            
            
            
        }
    

        if(is_null($cant3)){
            
        }
        else{
            $nom_zap1=$_POST['NOMBRE_3'];
            $price_1=$_POST['PRECIO_3'];
            $size=$_POST['talla_z3'];
            $cantida_1=$_POST['c_3'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
                
            );

            if($cant3>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }

                        $n3=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";

                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }

        }
        
        if(is_null($cant4)){
            
        }
        else{
            $nom_zap1=$_POST['NOMBRE_4'];
            $price_1=$_POST['PRECIO_4'];
            $size=$_POST['talla_z4'];
            $cantida_1=$_POST['c_4'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1,
                //"total"=>$price_1*$cantida_1
                
            );

            if($cant4>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];
                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }

                        $n4=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }

        }
    
        if(is_null($cant5)){
            

        }
        else{
            $nom_zap1=$_POST['NOMBRE_5'];
            $price_1=$_POST['PRECIO_5'];
            $size=$_POST['talla_z5'];
            $cantida_1=$_POST['c_5'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
            );

            if($cant5>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n5=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
        }
    
        if(is_null($cant6)){
            

        }
        else{
            $nom_zap1=$_POST['NOMBRE_6'];
            $price_1=$_POST['PRECIO_6'];
            $size=$_POST['talla_z6'];
            $cantida_1=$_POST['c_6'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
            );
            if($cant6>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n6=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
        }
    
        if(is_null($cant7)){
            

        }
        else{
            $nom_zap1=$_POST['NOMBRE_7'];
            $price_1=$_POST['PRECIO_7'];
            $size=$_POST['talla_z7'];
            $cantida_1=$_POST['c_7'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
               
                
            );

            if($cant7>=1){

                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n7=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
        }
    
        if(is_null($cant8)){
            

        }
        else{
            $nom_zap1=$_POST['NOMBRE_8'];
            $price_1=$_POST['PRECIO_8'];
            $size=$_POST['talla_z8'];
            $cantida_1=$_POST['c_8'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
                
            );

            if($cant8>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n8=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
        }
    
        if(is_null($cant9)){
            

        }
        else{
            $nom_zap1=$_POST['NOMBRE_9'];
            $price_1=$_POST['PRECIO_9'];
            $size=$_POST['talla_z9'];
            $cantida_1=$_POST['c_9'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1
                
            );

            if($cant9>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n9=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
        }
    
        if(is_null($cant10)){
            

        }
        else{
            $nom_zap1=$_POST['NOMBRE_10'];
            $price_1=$_POST['PRECIO_10'];
            $size=$_POST['talla_z10'];
            $cantida_1=$_POST['c_10'];

            $articulos_1=array(
                "Nombre" => $nom_zap1, 
                "Precio" => $price_1,
                "Talla" =>$size,
                "cantidad"=>$cantida_1                
            );

            if($cant10>=1){
                $multi=($articulos_1["cantidad"]*$total=$articulos_1["Precio"])*$IVA;
                $total=$multi +$articulos_1["cantidad"]*$total=$articulos_1["Precio"];

                echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;'>";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $articulos_1["Nombre"] ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>". $articulos_1["Talla"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["cantidad"] ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>". $articulos_1["Precio"] ;
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>". $total; 
                        echo "</td>";
                        if($total<150){
                            $costo= round($total*0.15,2) ;    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=150 || $total<250){
                            $costo= round($total*0.15,2) ;  
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=250 || $total<450){
                            $costo= round($total*0.15,2) ;   
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $costo</td>";
                        }
                        else if($total>=450){
                            $costo="gratis";    
                            echo "<td style='width: 117px; height: 35.4px; text-align: center;'>GRATIS</td>";
                        }
                        $n10=$total+$costo;
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'>\$ $n1</td>";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
            }
        }
    
        echo "<table style='width: 780px; height: 36px; margin-left: auto; margin-right: auto;' border='1' >";
                echo "<tbody>";
                    echo "<tr style='height: 35.4px;'>"; 
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>" ;
                        echo "</td>";
                        echo "<td style='width: 126px; height: 35.4px; text-align: center;'>" ;
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>";
                        echo "</td>";
                        echo "<td style='width: 128px; height: 35.4px; text-align: center;'>";
                        echo "</td>";
                        echo "<td style='width: 133px; height: 35.4px; text-align: center;'>"; 
                        echo "</td>";                          
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;'border='1' >TOTAL";
                        
                        
                        $SUMA=round($n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10,2);
                        
                        echo "<td style='width: 117px; height: 35.4px; text-align: center;' > \$ $SUMA";
                    echo "</tr>";
                echo "</tbody>";
            echo "</table>";
        

    
    ?>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src="../js/prueba.js"></script>
</body>
</html>