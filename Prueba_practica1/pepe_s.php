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
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <?php
    //CREANDO ARRAY CON NOMBRE DE LAS IMAGENES
    $dir_1="img/hombre";
    $hombre=array(
        "Adizero_Boston_1.jpg","ASICS_Sportstyle.jpg","Charged_Pursuit_3.jpg",
        "Electron_2.0.jpg","Fresh_Foam_680v7.jpg","Grand_City.jpg","Lossom.jpg",
        "Panly.jpg","SK8_Low.jpg","Swift_Run_22.jpg"

    );

    $dir_2="img/mujer";
    $mujer=array(
        "2402_Rope.jpg","Alexie.jpg","Fresh_Foam_680v7.jpg","Karmona.jpg","Laddi_2.jpg",
        "Lorio.jpg","Maggie.jpg","Perform_Flat_Sandal.jpg","Pola.jpg","SINGLE_SHOE"
    );

    $clave_1 = array_rand($hombre, 4);

    $clave_2=array_rand($mujer,4);

    ?>
    
    <header>
        <!--Ingresando el nuevo menu-->
        <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #8FBDD3;" id="menu">
        <div class="container-fluid">
            <!--Logo-->
            <a class="navbar-brand" href="pepe_s.php">
            <img class="logotipo" src="img/logo_cuadro_b.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pepe_s.php">Inicio</a>
                </li>
                            
                <li class="nav-item">
                <a class="nav-link" href="./pages/women.php">Women</a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="./pages/men.php">Men</a>
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

         <!--SLIDER-->
        
            <div class="slider">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="<?php echo $dir_1 . "/" . $hombre[$clave_1[3]]; ?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="<?php echo $dir_2 . "/" . $mujer[$clave_2[2]]; ?>" class="d-block w-100" alt="...">
                        </div>                
                        <div class="carousel-item">
                        <img src="<?php echo $dir_1 . "/" . $hombre[$clave_1[1]]; ?>" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>    
        
    </header>

   

    <!--main-->
    <main>
        <p class="Parrafo">LAS MEJORES MARCAS A NIVEL MUNDIAL</p>
        <section class="side_l">

            <div class="container text-center">
                <div class="row">
                    
                    <div class="col-sm">
                        <div class="card">
                            <img src="img/hombre/ASICS_Sportstyle.jpg" alt="" class="card-img">
                                <div class="card-info">
                                    <p class="text-title">ASICS Sportstyle  </p>
                                    <p class="text-body">ASICS Sportstyle<br>
                                    Japan S <br>
                                    </p>
                                </div>
                                <div class="card-footer">
                                <span class="text-title">$80.00</span>                                
                                </div>
                            </div>   
                        </div>
                    
                    <div class="col-sm">
                        <div class="card">
                            <img src="img/mujer/2402_Rope.jpg" alt="" class="card-img">
                                <div class="card-info">
                                    <p class="text-title">2402 – Rope </p>
                                    <p class="text-body">2402 – Rope <br>
                                    Superga <br>
                                    </p>
                                </div>
                            <div class="card-footer">
                            <span class="text-title">$ 65.80</span>
                                
                            </div>
                        </div>  
                    </div>


                    <div class="col-sm">
                        <div class="card">
                            <img src="img/hombre/Fresh_Foam_680v7.jpg" alt="" class="card-img">
                                <div class="card-info">
                                    <p class="text-title">8 Fresh Foam 680v7  </p>
                                    <p class="text-body">8 Fresh Foam 680v7 <br>
                                    New Balance <br>
                                    </p>
                                </div>
                            <div class="card-footer">
                            <span class="text-title">$ 79.99 </span>
                                
                            </div>
                        </div>  
                    </div>
                    
                    <div class="col-sm">
                        <div class="card">
                            <img src="img/mujer/Pola.jpg" alt="" class="card-img">
                                <div class="card-info">
                                    <p class="text-title">Pola </p>
                                    <p class="text-body">Pola <br>
                                    Calvin Klein <br>
                                    </p>
                                </div>
                            <div class="card-footer">
                            <span class="text-title">$ 79.00</span>
                                
                            </div>
                        </div>  
                    </div>

                    <div class="col-sm">
                        <div class="card">
                            <img src="img/mujer/Karmona.jpg" alt="" class="card-img">
                                <div class="card-info">
                                    <p class="text-title">Karmona </p>
                                    <p class="text-body">Karmona <br>
                                    Calvin Klein <br>
                                    </p>
                                </div>
                            <div class="card-footer">
                            <span class="text-title">$ 63.45</span>
                                
                            </div>
                        </div>  
                    </div>


                </div>
            </div>
        </section> 
    </main>


    <footer class="">
    <img class="logotipo-footer" src="img/logo_cuadro_b.png" alt="logotipo">
    <br>    
    <p>
      Copyright © 2023 <br>
      Pagina Creada por Anderson Melendez <br>
      
    </p>
  </footer>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
</body>
</html>