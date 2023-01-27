<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion Recibida</title>
    <link rel="stylesheet" href="http://font.googleapis.com/css?family=Nobile" />
    <link rel="stylesheet" href="css/tables.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <section>
        <article>
            <div id="info">
                <table id="hor-zebra" sumary="Datos Recibidos del Formulario">
                    <caption>Informacion de formulario</caption>
                    <thead>
                        <tr class="thead">
                            <th scope="col">Campo</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_POST['sumbit']) && $_POST ['sumbit'] =="Enviar");
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nCliente\n</td>\n";
                        //Accediendo a los datos del formulario usando la funcion extract()
                        extract($_POST);
                        $cliente = !empty($client) ? $client: "<a href=\"ingresos.html\">No ingrso el cliente</a>";                                                                                                
                        echo "\t\t<td>\n" . $cliente . "\n</td>\n";
                        echo "\t </tr>\n";
                        echo "\t<tr>\n";
                        echo "\t\t<td>\nProducto\n</td>\n";
                        $producto = !empty($product) ? $product: "<a href=\"ingresos.html\">No ingrso el producto</a>";
                        echo "\t\t<td>\n" . $producto . "\n</td>\n";
                        echo "\t </tr>\n";
                        echo "\t<tr class=\"odd\">\n";
                        echo "\t\t<td>\nPrecio\n</td>\n";
                        $precio = !empty($price) ? $price: "<a href=\"ingresos.html\">No ingrso el precio</a>";
                        echo "\t\t<td>\n" . $precio . "\n</td>\n";
                        echo "\t </tr>\n";
                        echo "\t <tr>\n";
                        echo "\t\t<td>\nCantidad\n</td>\n";
                        $cantidad = !empty($quantity) ? $quantity: "<a href=\"ingresos.html\">No ingrso la cantidad</a>";
                        echo "\t\t<td>\n" . $cantidad . "\n</td>\n";
                        echo "\t </tr>\n";
                            echo "\t <tr class=\"odd\">\n";
                            echo "\t\t<td>\nTotal a pagar\n</td>\n";
                        if(isset($cliente)&& isset($producto)&& floatval($precio)>0 && floatval($cantidad)>0):
                        echo "\t<td>\n$ " . number_format($precio * $cantidad,2,'.',',') . "\n</td>\n";

                        else:
                            echo "\t<td>\nNada que cobrar\n</td>\n";
                        endif;
                            echo "\t</tr>\n";
                        /*else:                        
                            echo "\t<tr class=\"odd\">\n";
                            echo "\t\t<td>No se ha Ingresado desde el formulario.</td>";
                            echo "\t</tr>\n";
                        endif;*/
                        
                        ?>
                    </tbody>
                </table>
                <div id="link">
                        <a href="ingresos.html" class="button-link">Ingresar nuevos datos</a>
                </div>
            </div>
        </article>
    </section>
    
</body>
</html>