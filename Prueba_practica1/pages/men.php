<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEPE SHOES - Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <link rel="icon" href="../img/logo_cuadro_b.png" type="image/jpg">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mukta+Malar'>

    <link rel="stylesheet" href="../css/estilo.css">
    
    <!--BAG-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../css/style_d.css">
</head>
<body>

    <?php
    //CREANDO ARRAY CON NOMBRE DE LAS IMAGENES
    $dir_1="../img/modelos/men";
    $hombre=array(
        "mens-shoes-875947_1280.jpg","shoes-5359255_1280.jpg",
        "shoes-men-3743544_1280.jpg","63a1b96372e06f304150211e79f9f4c7.jpg",
        "14291_Comp_E_Image2.jpg","Cq1vmYPXEAAZKCL.jpg"

    );


    $clave_1 = array_rand($hombre, 6);

    //Para que no sean las mismas imagenes en las pages
    $num_random_1=rand(0,5);
    $num_random_2=rand(0,2);
    
    ?>
    
    <header>
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
                <a class="nav-link" href="../pages/women.php">Women</a>
                </li>

                <li class="nav-item">
                <a class="nav-link active" href="../pages/men.php">Men</a>
                </li>
                

                

                <li class="nav-item">
                
                <button class="cta nav-link">
                    <span class="hover-underline-animation"> Shop now </span>
                    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                        <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
                    </svg>
                </button>
                </li>
                
            </ul>
            
            </div>
        </div>
        </nav>
         
    </header>

   

    <!--main-->
    <main class="altura-a-b">
        <p class="Parrafo">LO MEJOR PARA EL</p>
        
        <div class="content text-center">
            
            <div class="left">
                
                <img src="<?php echo $dir_1 . "/" . $hombre[$clave_1[$num_random_1]]; ?>" alt="" class="img_show">
            </div>
            <div class="right">
                
                <img src="<?php echo $dir_1 . "/" . $hombre[$clave_1[$num_random_2]]; ?>" alt="" class="img_show">
            </div>
        </div>

        <form method="post"  action="factura.php">
            <section class="side_l">
                <div class="container text-center">
                    <div class="row">
                        
                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Grand_City.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title" > Grand City </p>
                                        <input type="hidden" name="NOMBRE_1" id="" value="Grand City">
                                        
                                        <p type="text" id="" class="text-body" value="Alexie" >Cole Haan <br>
                                        </p>
                                    </div>
                                    
                                    <div class="card-footer">
                                    <span class="text-title" name="precio">$ 75.00</span><br>  
                                    <input type="hidden" name="PRECIO_1" id="" value="75.00">

                                    </div>
                                    
                                    <!--Talla-->
                                    <div  style="text-align:center; margin-top:10px;">
                                    <select class="dropdown" name="talla_z1">
                                        <option value="9">Talla 9</option>
                                        <option value="9.5">Talla 9.5</option>
                                        <option value="10">Talla 10</option>
                                        <option value="11.5">Talla 11.5</option>
                                    </select>
                                    
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_1 ">
                                           <input type="number" name="c_1" class="dropdown" max="5" min="0" >

                                           <button name="btn_1" type="button" class="card-button">                                            
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                            <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                            <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                                                                                                                                  
                                </div>   
                            </div>
                        
                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Panly.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Panly </p>
                                        <input type="hidden" name="NOMBRE_2" id="" value="Panly">

                                        <p class="text-body">Tommy Hilfiger</p>
                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$ 75.99</span>
                                <input type="hidden" name="PRECIO_2" id="" value="75.99">
                                                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                    <select name="talla_z2" class="dropdown">
                                        <option value="9">Talla 9</option>
                                        <option value="9.5">Talla 9.5</option>
                                        <option value="10">Talla 10</option>
                                        <option value="10.5">Talla 10.5</option>
                                    </select>
                                </div>
                                    
                                    <!--Cantidad de producto-->
                                <div class="count_2">
                                    <input type="number" name="c_2" class="dropdown" max="5" min="0" >

                                    <button name="btn_2" type="button" class="card-button" >
                                        <div>
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                            <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                            <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>

                                
                            </div>  
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Charged_Pursuit_3.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Charged Pursuit 3</p>
                                        <input type="hidden" name="NOMBRE_3" id="" value="Charged Pursuit 3">


                                        <p class="text-body">Under Armour </p>
                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$69.98 </span>
                                <input type="hidden" name="PRECIO_3" id="" value="69.98">
    

                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                    <select name="talla_z3" class="dropdown">
                                        <option value="7">Talla 7</option>
                                        <option value="8">Talla 8</option>
                                        <option value="8.5">Talla 8.5</option>
                                        <option value="9">Talla 9</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_3">
                                    <input type="number" name="c_3" class="dropdown" max="5" min="0" >
                                    <button name="btn_3" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>
                        
                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Lossom.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Losson </p>
                                        <input type="hidden" name="NOMBRE_4" id="" value="Losson">

                                        <p class="text-body">Tommy Hilfiger</p>


                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$ 85.00</span>
                                <input type="hidden" name="PRECIO_4" id="" value="85.00">

                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                <select name="talla_z4"class="dropdown">
                                        <option value="9">Talla 9</option>
                                        <option value="9.5">Talla 9.5</option>
                                        <option value="10">Talla 10</option>
                                        <option value="10.5">Talla 10.5</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_4">
                                    <input type="number" name="c_4" class="dropdown"max="5" min="0"  >
                                    <button name="btn_4" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Swift_Run_22.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Swift Run 22  </p>
                                        <input type="hidden" name="NOMBRE_5" id="" value="Swift Run 22 ">

                                        <p class="text-body">Adidas Originalss</p>
                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$ 89.95</span>
                                <input type="hidden" name="PRECIO_5" id="" value="89.95">
                                
                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                    <select name="talla_z5" class="dropdown">
                                        <option value="8">Talla 8</option>
                                        <option value="8.5">Talla 8.5</option>
                                        <option value="9">Talla 9</option>
                                        <option value="9.5">Talla 9.5</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_5">
                                    <input type="number" name="c_5" class="dropdown" max="5" min="0" >
                                    <button name="btn_5" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>


                    </div>

                    <div class="row altura-a-b">
                        
                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Electron_2.0.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Electron 2.0 </p>
                                        <input type="hidden" name="NOMBRE_6" id="" value="Electron 2.0 ">

                                        <p class="text-body">PUMA</p>
                                    </div>
                                    <div class="card-footer">
                                    <span class="text-title">$65.55</span>
                                    <input type="hidden" name="PRECIO_6" id="" value="65.55">

                                        
                                    </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                    <select name="talla_z6" class="dropdown">
                                        <option value="7">Talla 7</option>
                                        <option value="9.5">Talla 9.5</option>
                                        <option value="10">Talla 10</option>
                                        <option value="10.5">Talla 10.5</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_6">
                                    <input type="number" name="c_6" class="dropdown" max="5" min="0"  >
                                    <button name="btn_6" type="button" class="card-button">
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                            <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                            <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                            <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>   
                            </div>
                        
                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Adizero_Boston_1.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Adizero Boston 11  </p>
                                        <input type="hidden" name="NOMBRE_7" id="" value="Adizero Boston 11s">

                                        <p class="text-body">Adidas Running</p>
                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$ 150.00 </span>
                                <input type="hidden" name="PRECIO_7" id="" value="150.00">

                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                    <select name="talla_z7" class="dropdown">
                                        <option value="7">Talla 7</option>
                                        <option value="8">Talla 8</option>
                                        <option value="9">Talla 9</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_7">
                                    <input type="number" name="c_7" class="dropdown" max="5" min="0"  >
                                    <button name="btn_7" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>


                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/Fresh_Foam_680v7.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">Fresh Foam 680v7</p>
                                        <input type="hidden" name="NOMBRE_8" id="" value="Fresh Foam 680v7">

                                        <p class="text-body">New Balance</p>
                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$79.99</span>
                                <input type="hidden" name="PRECIO_8" id="" value="79.99">

                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                <select name="talla_z8" class="dropdown">
                                        <option value="7">Talla 7</option>
                                        <option value="7.5">Talla 7.5</option>
                                        <option value="8">Talla 8</option>
                                        <option value="9">Talla 9</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_8">
                                    <input type="number" name="c_8" class="dropdown" max="5" min="0" >
                                    <button name="btn_8" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>
                        
                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/SK8_Low.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">SK8 Low </p>
                                        <input type="hidden" name="NOMBRE_9" id="" value="SK8 Low">

                                        <p class="text-body">Vans</p>

                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$ 70.00 </span>
                                <input type="hidden" name="PRECIO_9" id="" value="70.00">

                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                    <select name="talla_z9" class="dropdown">
                                        <option value="6.5">Talla 6.5</option>
                                        <option value="7">Talla 7</option>
                                        <option value="7.5">Talla 7.5</option>
                                        <option value="8">Talla 8</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_9">
                                    <input type="number" name="c_9" class="dropdown" max="5" min="0" >
                                    <button name="btn_9" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="../img/hombre/ASICS_Sportstyle.jpg" alt="" class="card-img">
                                    <div class="card-info">
                                        <p class="text-title">ASICS Sportstyle   </p>
                                        <input type="hidden" name="NOMBRE_10" id="" value="ASICS Sportstyle ">

                                        <p class="text-body">Japan S</p>
                                    </div>
                                <div class="card-footer">
                                <span class="text-title">$ 80.00</span><br>
                                <input type="hidden" name="PRECIO_10" id="" value="80.00">

                                    
                                    
                                </div>
                                <!--Talla-->
                                <div  style="text-align:center; margin-top:10px;">
                                <select name="talla_z10" class="dropdown">
                                        <option value="7">Talla 7</option>
                                        <option value="7.5">Talla 7.5</option>
                                        <option value="9">Talla 9</option>
                                        <option value="10">Talla 10</option>
                                    </select>
                                    </div>
                                    
                                    <!--Cantidad de producto-->
                                    <div class="count_10">
                                    <input type="number" name="c_10" class="dropdown" max="5" min="0" >
                                    <button name="btn_10" type="button" class="card-button">
                                        <svg class="svg-icon" viewBox="0 0 20 20">
                                        <path d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z"></path>
                                        <path d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z"></path>
                                        <path d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z"></path>
                                        </svg>
                                    </button>
                                    </div>
                            </div>  
                        </div>


                    </div>
                </div>
            </section> 
            
            <!--<button name="agregar_c" value="Enviar" type="menu">TERMINAR</button>-->
            <div class="bton_envio">
                <button class="btn" name="agregar_c"> Comprar Ahora
                </button>
            </div>
        </form>
    </main>


    <footer class="">
    <img class="logotipo-footer" src="../img/logo_cuadro_b.png" alt="logotipo">
    <br>    
    <p>
      Copyright ?? 2023 <br>
      Pagina Creada por Anderson Melendez <br>
      
    </p>
  </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src="../js/script.js"></script>
</body>
</html>