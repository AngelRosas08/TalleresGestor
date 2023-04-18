<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>Tecnologico de Estudios Superiores de Jilotepec</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/Logo_tesji.ico">
    <link rel="Logo_tesji.png" sizes="144x144" type="image/x-icon" href="images/Logo_tesji.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

 </head>

  <body>
	
	<!-- Preloader Start -->
    <div class="preloader">
	  <p>Loading...</p>
     </div>
     <!-- Preloader End -->

    
    
    <!-- Menu Section Start -->
    <header id="home">
        
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index-2.html">  TESJI</a>
                        </div>
                    </div>
                    
                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="index.php">inicio <div class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">Sobre Nosotros</a>
                                        </li>
                                      
                                        <li><a class="smoth-scroll" href="actualizar.php">Actualizar/Eliminar</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#services">Tallers Disponibles</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Registrarse</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </header>        
  
    <!-- Contact Start -->
    <section id="contact" class="section-space-padding">
       <div class="container">
          <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Registrarse</h2>
                          <div class="divider dark">
						   <i class="icon-envelope-open"></i>
						 </div>
                        
                    </div>
                </div>
            </div>
            
         
         <div class="margin-top-30 margin-bottom-50">
           <div class="row">
           
             <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">   
                 
               <div class="row">
                 <div class="contact-us-detail"><a href="mailto:name@domain.com">tellaeresTesji@gmail.com</a></div>

                  <form method="POST" action="actualizar-cont.php" class="contact-us pattern-bg">
                  <?php
                      require("Conexion/conexion.php");
                      
                      $matricuaA = $_GET['numControl']; 

                      $consulta = "Call sp_ver_alumno('$matricuaA')";
                      $query = mysqli_query($conec, $consulta);

                      //No es neesario con un While puesto que solo es 1 registro
                      $datos = mysqli_fetch_array($query);

            ?>
                    
					  <div class="col-sm-6">
            <div class="form-group">
						  <input type="text" id="name" name="numeroControl" class="form-control" value="<?php echo $matricuaA; ?>">
						 </div>
            </div>
              <div class="col-sm-6">
					    <div class="form-group">
						 <input type="text" id="email" name="nombre" class="form-control" value="<?php echo $datos[1]; ?>">
						 </div>
                        </div>
                        
                        <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="website" name="apePa" class="form-control" value="<?php echo $datos[2]; ?>">
						   </div>
                          </div>
                          
                        <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" name="apeMa" class="form-control" value="<?php echo $datos[3]; ?>">
						   </div>
                          </div>
                          <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" name="telefono" class="form-control" value="<?php echo $datos[4]; ?>">
						   </div>
                          </div>
                          <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" name="email" class="form-control" value="<?php echo $datos[5]; ?>">
						   </div>
                          </div>
                          <div class="col-sm-12">
						  <select id="subject" name="carrera" class="form-group form-control">
              <option value="" selected disabled>Seleccione tu carrera</option>
						
                <?php
                    require("conexion/conexion.php");
                    //preparamos la consulta
                    $Consultacarrera = "SELECT ID_CARRERA,NOMBRE_CARRERA FROM carrera";
                    //Ejecutamos la consulta
                    $Resultado = mysqli_query($conec,$Consultacarrera);
                    
                    //Estraer datos de consulta
                    
                    while($carrera = mysqli_fetch_array($Resultado)){

                      if($carrera["NOMBRE_CARRERA"] == $datos[6])
                        {
                          echo("<option value='".$carrera[0]."' Selected>".$carrera[1]."</option>");
                        }else{
                          echo("<option value='".$carrera[0]."'>".$carrera[1]."</option>");
                        }
                      
                    }
                ?>
						   </select>
                          </div>

              <div class="col-sm-12">
						  <select id="subject" name="taller" class="form-group form-control">
              <option value="" selected disabled>Seleccione un Taler</option>
                <?php
                    require("conexion/conexion.php");
                    //preparamos la consulta
                    $Consultataller = "SELECT ID_TALLER, NOMBRE_TALLER FROM taller";
                    //Ejecutamos la consulta
                    $Resultado = mysqli_query($conec,$Consultataller);
                    
                    //Estraer datos de consulta
                    
                    while($taller = mysqli_fetch_array($Resultado)){
                      if($taller["NOMBRE_TALLER"] == $datos[7])
                      {
                        echo("<option value='".$taller[0]."' Selected>".$taller[1]."</option>");
                      }else{
                        echo("<option value='".$taller[0]."'>".$taller[1]."</option>");
                      }
                    }
                ?>
						   </select>
                          </div>
                    <div class="text-center">      
		               <button type="submit" class="button button-style button-style-dark button-style-color-2">Actualizar</button>

	                  </div>
                       
                  </form>
                   
                </div>
			  </div>
            </div>
           
        
        </div>
       </div>
     </section>
     <!-- Contact End -->
       
        
        
        
    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
               
            <div class="col-md-12">
              <ul class="social-icon margin-bottom-30">
                 <li><a href="#" target="_blank" class="facebook"><i class="icon-social-facebook"></i></a></li>
                 <li><a href="#" target="_blank" class="twitter"><i class="icon-social-twitter"></i></a></li>
                 <li><a href="#" target="_blank" class="google-plus"><i class="icon-social-google"></i></a></li>
                 <li><a href="#" target="_blank" class="instagram"><i class="icon-social-instagram"></i></a></li>
                 <li><a href="#" target="_blank" class="dribbble"><i class="icon-social-dribbble"></i></a></li>
               </ul>
          </div>
              

             </div>
        </div>
    </footer>
    <!-- Footer End -->
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/plugin.js"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="js/scripts.js"></script>
  
  
  </body>
 </html>