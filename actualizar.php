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
      <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    
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
                            <a href="index-2.html">TESJI</a>
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
     <!-- Testimonial Start -->
     <section id="testimonials" class="testimonial-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Actualizar/Eliminar</h2>
                         <div class="divider dark">
						   <i class="icon-speech"></i>
						  </div>
                        <p>Si estas idiota y te equivocaste aqui lo puedes solucionar</p>
                    </div>
                </div>
            </div>
            
            <form action="actualizar.php" method="POST">
            <label>Introduce tu numero de Matricula</label>
            <input type="text" name="numMatricula" placeholder="Numero de Matricula"></input>
            <button class="btn btn-primary" type="submit">BUSCAR</button>
            </form>
        </div>
    </section>

    <section class="home-section">
        <div class="container">
            <div class="row">
                        
            <div class="table-responsive">
            <table class="table table-hover" name="table_alum">
            <thead>
              <tr>
                <th scope="col">NUM CONTROL</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO PATERNO</th>
                <th scope="col">APELLIDO MATERNO</th>
                <th scope="col">NUMERO DE TELEFONO</th>
                <th scope="col">E-MAIL</th>
                <th scope="col">CARRERA</th>
                <th scope="col">TALLER</th>
              </tr>
            </thead>
            <tbody id="datos">
            <?php
              require("Conexion/conexion.php");

              @$matri = $_POST["numMatricula"];

              $sql = "CALL sp_ver_alumno('$matri')";
              //Ejecutamos la consulta
              
              $query = mysqli_query($conec, $sql);
             while ($row = mysqli_fetch_assoc($query)){
              ?>
              <tr>
              <td><?php echo $row['NUMERO_CONTROL_ALUMNO'];?></td>
              <td><?php echo $row['NOMBRE_ALUMNO'];?></td>
              <td><?php echo $row['APELLIDOP_ALUMNO'];?></td>
              <td><?php echo $row['APELLIDOM_ALUMNO'];?></td>
              <td><?php echo $row['TELEFONO_ALUMNO'];?></td>
              <td><?php echo $row['EMAIL_ALUMNO'];?></td>
              <td><?php echo $row['NOMBRE_CARRERA'];?></td>
              <td><?php echo $row['NOMBRE_TALLER'];?></td>
              <td><a href='editar.php?numControl=<?php echo $row['NUMERO_CONTROL_ALUMNO'];?>'><i class="fa fa-pencil-square-o" title="Editar" ></i> </a></td>
              <td><a href='eliminar.php?numControl=<?php echo $row['NUMERO_CONTROL_ALUMNO'];?>'><i class="fa fa-window-close"  title="Eliminar"></i></a></td> 
             </tr> 
             <?php            }
             ?>
              
            </tbody>
            <?php
                
            ?>
          </table>
          <br><hr>
        </section>
    
    <!-- Services Start -->
    <section id="services" class="services-section section-space-padding">
        <div class="container">
           <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>TALLERES DISPONIBLES.</h2>
                          <div class="divider dark">
						   <i class="icon-drop"></i>
						 </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="row margin-top-30">
            
            <div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="icon-screen-smartphone color-1"></i>
					<h3>BASKETBALL</h3>
					<hr>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="icon-screen-tablet color-2"></i>
					<h3>FUTBOL</h3>
					<hr>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-code color-3"></i>
					<h3>Voleibol</h3>
					<hr>
				</div>
			</div>
            
            <div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="icon-support color-4"></i>
					<h3>DANZA</h3>
					<hr>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="fa fa-html5 color-5"></i>
					<h3>Taekwondo</h3>
					<hr>
				</div>
			</div>

			<div class="col-md-4 col-sm-6">
				<div class="services-detail">
					<i class="icon-bulb color-6"></i>
					<h3>AJEDREZ</h3>
					<hr>
				</div>
			</div>
            
            </div>
        </div>
    </section>
    <!-- Services End -->
    
    
    
    <!-- Call to Action Start -->
    <section class="call-to-action bg-cover section-space-padding text-center">
       <div class="container">
         <div class="row">
           <div class="col-md-8">
             <h2>¿Estas Interesado en Algun Taller?</h2>
             </div>
             
            <div class="col-md-4">
             <div class="text-center">
               <a class="button button-style button-style-color-2 smoth-scroll" href="#contact">Registrarse</a>
            </div>
            
            </div>    
          </div>
         </div>
       </section>
       <br><br><br><hr><br><br><br><hr><br><br><br><hr>
       <!-- Call to Action End -->
        
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