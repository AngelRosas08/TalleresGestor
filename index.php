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
    <?php
      require('Conexion/conexion.php')
    ?>
    
	
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
                                        <li class="active"><a class="smoth-scroll" href="#home">inicio <div class="ripple-wrapper"></div></a>
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
     <!-- Menu Section End -->  
    
    
    <!-- Home Section Start -->
    <section class="home-section">
        <div class="container">
            <div class="row">
                
                 <div class="col-sm-offset-2 col-md-4 col-sm-6 margin-left-setting">
                    <div class="margin-top-150">
                        
                     <div class="table-responsive">
					    <table class="table">
              <tr>
							    <td>Numero de Control</td>
								<td>201923139</td>
							 </tr>
							<tr>
							    <td>Name</td>
								<td>Brandon Lee</td>
							 </tr>
              <tr>
								<td>Apellido Paterno</td>
								<td>Reyes</td>
							</tr>
							<tr>
								<td>Apellido Materno</td>
								<td>Moreno</td>
							 </tr>
							<tr>
								<td>Telefono</td>
								<td>5574291633</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>brandon@gmail.com</td>
							</tr>
              <tr>
							    <td>Carrera</td>
								<td>ISIC</td>
							 </tr>
               <tr>
							    <td>Taller</td>
								<td>Basquetbol</td>
							 </tr>
						</table>
					  </div>
                     </div>
                   </div>
                 
                 <div class="col-md-5 col-sm-6">
                    <div class="me-image">
                      <img src="images/Logo_tesji.png" alt="">
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- Home Section End -->
        
        
        
    <!-- Experience Start -->
    <section class="section-space-padding">
        <div class="container">
           <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Actividades De Formación Integral</h2>
                         <div class="divider dark">
						   <i class="icon-graduation"></i>
						  </div>
                        <p>El Tecnológico de Estudios Superiores de Jilotepec reconoce la importancia de promover actividades culturales,
                          recreativas y deportivas para lograr que los estudiantes cuenten con elementos para un pleno desarrollo físico y mental,
                          por lo que se han implementado talleres tales como: Fútbol Soccer, Guitarra, Danza Moderna y Contemporánea, Fotografía,
                          Voleibol, Dibujo y Basquetbol.</p>
                          <h2 class="Horarios">Horarios</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
            
            <div class="col-md-6 col-sm-6">
				<div class="experience">
				
				<div class="experience-item">
					<div class="experience-circle">
          <i class="fa fa-dribbble"></i>
                       <p>8, Nov 2016</p>
					</div>
					<div class="experience-content experience-color-blue">
						<h4>BasquetBall</h4>
              <h6>
              <?php
                 require("conexion/conexion.php");
                 //preparamos la consulta
                 $Consultainfo = "SELECT
                 taller.NOMBRE_TALLER, 
                 taller.DESCRIPCION_TALLER, 
                 horarios.TURNO_HORARIO, 
                 horarios.DESCRIPCION_HORARIOS
               FROM
                 taller
                 INNER JOIN
                 horarios
                 ON 
                   taller.CLAVE_HORARIO = horarios.CLAVE_HORARIO
                   WHERE  taller.NOMBRE_TALLER= 'Basquetball' ";
                 //Ejecutamos la consulta
                 $Resultado = mysqli_query($conec,$Consultainfo);
                 
                 //Estraer datos de consulta
                 
                 while($info = mysqli_fetch_array($Resultado)){
                   echo($info[1]."<br>"."<br>");
                   echo($info[2]."<br>"."<br>");
                   echo($info[3]."<br>"."<br>");
                 }
              ?>
             <h6>
					</div>
				 </div>
				
				<div class="experience-item">
					<div class="experience-circle">
						<i class="icon-trophy"></i> 
                        <p>8, Nov 2016</p>
					</div>
					<div class="experience-content experience-color-blue">
          <h4>Futbol</h4>
          <h6>
              <?php
                 require("conexion/conexion.php");
                 //preparamos la consulta
                 $Consultainfo = "SELECT
                 taller.NOMBRE_TALLER, 
                 taller.DESCRIPCION_TALLER, 
                 horarios.TURNO_HORARIO, 
                 horarios.DESCRIPCION_HORARIOS
               FROM
                 taller
                 INNER JOIN
                 horarios
                 ON 
                   taller.CLAVE_HORARIO = horarios.CLAVE_HORARIO
                   WHERE  taller.NOMBRE_TALLER= 'Futbol' ";
                 //Ejecutamos la consulta
                 $Resultado = mysqli_query($conec,$Consultainfo);
                 
                 //Estraer datos de consulta
                 
                 while($info = mysqli_fetch_array($Resultado)){
                   echo($info[1]."<br>"."<br>");
                   echo($info[2]."<br>"."<br>");
                   echo($info[3]."<br>"."<br>");
                 }
              ?>
             <h6>
					</div>
				 </div>
				
				<div class="experience-item">
					<div class="experience-circle">
						<i class="icon-book-open"></i> 
                        <p>8, Nov 2016</p>
					</div>
					<div class="experience-content experience-color-blue">
          <h4>Voleibol</h4>
          <h6>
              <?php
                 require("conexion/conexion.php");
                 //preparamos la consulta
                 $Consultainfo = "SELECT
                 taller.NOMBRE_TALLER, 
                 taller.DESCRIPCION_TALLER, 
                 horarios.TURNO_HORARIO, 
                 horarios.DESCRIPCION_HORARIOS
               FROM
                 taller
                 INNER JOIN
                 horarios
                 ON 
                   taller.CLAVE_HORARIO = horarios.CLAVE_HORARIO
                   WHERE  taller.NOMBRE_TALLER= 'Voleibol' ";
                 //Ejecutamos la consulta
                 $Resultado = mysqli_query($conec,$Consultainfo);
                 
                 //Estraer datos de consulta
                 
                 while($info = mysqli_fetch_array($Resultado)){
                   echo($info[1]."<br>"."<br>");
                   echo($info[2]."<br>"."<br>");
                   echo($info[3]."<br>"."<br>");
                 }
              ?>
             <h6>
					</div>
				 </div>
				
			 </div>
			</div>

			<div class="col-md-6 col-sm-6">
				<div class="experience">
				
				<div class="experience-item">
					<div class="experience-circle experience-company pink-color-bg">
					   <i class="icon-energy"></i>
					</div>
					<div class="experience-content">
          <h4>Danza</h4>
          <h6>
              <?php
                 require("conexion/conexion.php");
                 //preparamos la consulta
                 $Consultainfo = "SELECT
                 taller.NOMBRE_TALLER, 
                 taller.DESCRIPCION_TALLER, 
                 horarios.TURNO_HORARIO, 
                 horarios.DESCRIPCION_HORARIOS
               FROM
                 taller
                 INNER JOIN
                 horarios
                 ON 
                   taller.CLAVE_HORARIO = horarios.CLAVE_HORARIO
                   WHERE  taller.NOMBRE_TALLER= 'Danza' ";
                 //Ejecutamos la consulta
                 $Resultado = mysqli_query($conec,$Consultainfo);
                 
                 //Estraer datos de consulta
                 
                 while($info = mysqli_fetch_array($Resultado)){
                   echo($info[1]."<br>"."<br>");
                   echo($info[2]."<br>"."<br>");
                   echo($info[3]."<br>"."<br>");
                 }
              ?>
             <h6>
					</div>
				 </div>
				
				<div class="experience-item">
					<div class="experience-circle experience-company pink-color-bg">
						<i class="icon-ghost"></i>
					</div>
					<div class="experience-content">
          <h4>Taekwondo</h4>
          <h6>
              <?php
                 require("conexion/conexion.php");
                 //preparamos la consulta
                 $Consultainfo = "SELECT
                 taller.NOMBRE_TALLER, 
                 taller.DESCRIPCION_TALLER, 
                 horarios.TURNO_HORARIO, 
                 horarios.DESCRIPCION_HORARIOS
               FROM
                 taller
                 INNER JOIN
                 horarios
                 ON 
                   taller.CLAVE_HORARIO = horarios.CLAVE_HORARIO
                   WHERE  taller.NOMBRE_TALLER= 'Taekwondo' ";
                 //Ejecutamos la consulta
                 $Resultado = mysqli_query($conec,$Consultainfo);
                 
                 //Estraer datos de consulta
                 
                 while($info = mysqli_fetch_array($Resultado)){
                   echo($info[1]."<br>"."<br>");
                   echo($info[2]."<br>"."<br>");
                   echo($info[3]."<br>"."<br>");
                 }
              ?>
             <h6>
					</div>
				 </div>
				
				<div class="experience-item">
					<div class="experience-circle experience-company pink-color-bg">
						<i class="icon-compass"></i>
					</div>
					<div class="experience-content">
          <h4>Ajedrez</h4>
          <h6>
              <?php
                 require("conexion/conexion.php");
                 //preparamos la consulta
                 $Consultainfo = "SELECT
                 taller.NOMBRE_TALLER, 
                 taller.DESCRIPCION_TALLER, 
                 horarios.TURNO_HORARIO, 
                 horarios.DESCRIPCION_HORARIOS
               FROM
                 taller
                 INNER JOIN
                 horarios
                 ON 
                   taller.CLAVE_HORARIO = horarios.CLAVE_HORARIO
                   WHERE  taller.NOMBRE_TALLER= 'Ajedrez' ";
                 //Ejecutamos la consulta
                 $Resultado = mysqli_query($conec,$Consultainfo);
                 
                 //Estraer datos de consulta
                 
                 while($info = mysqli_fetch_array($Resultado)){
                   echo($info[1]."<br>"."<br>");
                   echo($info[2]."<br>"."<br>");
                   echo($info[3]."<br>"."<br>");
                 }
              ?>
             <h6>
					</div>
				 </div>
				
			 </div>
			</div>
            
           </div>
        </div>
    </section>
    <!-- Experience End -->
    
    
    <!-- About Start -->
    <section id="about" class="about section-space-padding">
       <div class="container">
          <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Sobre Nostros</h2>
                         <div class="divider dark">
						   <i class="icon-emotsmile"></i>
						  </div>
                        <ul class=" about-me-text col-md-4" >
                        <li>Gobierno del Estado de México Tecnológico de Estudios Superiores de Jilotepec</li> 
                        <li>Carretera Jilotepec a Chapa de Mota km. 6.5, Ejido de Jilotepec, C.P. 54240, Jilotepec de Molina Enríquez</li>
                        <li>Tel: 5586015264</li> 
                        <li>tesji.direccion@gmail.com</li> 
                        <li>dir_dejilotepec@tecnm.mx</li> 
                        
                        </ul>
                        <div class="col-md-6">
               
             <div class="about-me-text"style="padding-left:50px;">
               
               <ul class="social-icon" >
                <li><a href="#" target="_blank" class="facebook"><i class="icon-social-facebook"></i></a></li>
                <li><a href="#" target="_blank" class="twitter"><i class="icon-social-twitter"></i></a></li>
                <li><a href="#" target="_blank" class="behance"><i class="icon-social-behance"></i></a></li>
                <li><a href="#" target="_blank" class="dribbble"><i class="icon-social-dribbble"></i></a></li>
               </ul>
               
               </div>
              </div>
                    </div>
                </div>
            </div>
            
            
            <div class="row">
              
             
              
            </div>
          </div>
       </section>
       
      <!-- Skills Modal Start -->
      <div class="modal fade padding-top-70" id="skillmodal" role="dialog">
        <div class="modal-dialog">
    
      
      <div class="modal-content pattern-bg">
        <div class="modal-body">
           <div class="row">
                <div class="col-sm-12">
                    <div class="section-title margin-top-30">
                      <button type="button" class="btn pull-right" data-dismiss="modal"><i class="fa fa-close"></i></button>
                        <h2>My Skills.</h2>
                         <div class="divider dark">
						   <i class="icon-energy"></i>
						  </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
            
          <div class="row">
           <div class="col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8">
          
            <div class="my-skill margin-bottom-50">
                    <strong>Graphic Design</strong>
                       <span class="pull-right">80%</span>
                            <div class="progress">
                                 <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                </div>
                              </div>

                     <strong>Website Design</strong>
                         <span class="pull-right">99%</span>
                             <div class="progress">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                </div>
                              </div>

                      <strong>HTML5/CSS3</strong>
                         <span class="pull-right">85%</span>
                             <div class="progress">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                              </div>
                           </div>
                          
                       <strong>Javascript</strong>
                         <span class="pull-right">90%</span>
                             <div class="progress">
                                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                              </div>
                           </div>
                        </div>
          
                   </div>
               </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Skills Modal End -->
      
      
      
      <!-- Subscribe Modal Start -->
      <div class="modal fade subscribe padding-top-120" id="subscribemodal" role="dialog">
        <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-body">
           <div class="row">
                <div class="col-sm-12">
                    <div class="section-title margin-top-30">
                      <button type="button" class="btn pull-right" data-dismiss="modal"><i class="fa fa-close"></i></button>
                        <h2>Subscribe.</h2>
                         <div class="divider dark">
						   <i class="icon-envelope-letter"></i>
						  </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
            
          <div class="row">
           <div class="col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8">
          
            <div class="margin-bottom-50">
                    <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">
								
						  <div class="subscribe-form">
							 <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
							  <button class="submit-btn" type="submit">Submit</button>
								</div>
								<label for="mc-email" class="mc-label"></label>
							  </form>
                           </div>
                        </div>
                     </div>
                 </div>
             </div>
          </div>
       </div>
       <!-- Subscribe Modal End -->
       <!-- About End -->
    
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
            
            <label>Introduce tu numero de Matricula</label>
            <input type="text" name="numMatricula" placeholder="Numero de Matricula"></input>
        </div>
    </section>
    <!-- Testimonial End -->
    
    
    
      <!-- statistics -->
      <section class="statistics-section section-space-padding bg-cover text-center">
         <div class="container">     

            <div class="row">

           <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="statistics bg-color-1">
              <div class="statistics-icon"><i class="icon-mustache"></i>
              </div>
              <div class="statistics-content">
                <h5><span data-count="2025" class="statistics-count">2025</span></h5><span>Projects Done</span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="statistics bg-color-6">
              <div class="statistics-icon"><i class="icon-emotsmile"></i>
              </div>
              <div class="statistics-content">
                <h5> <span data-count="1200" class="statistics-count">1200</span></h5><span>Happy Clients</span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="statistics bg-color-4">
              <div class="statistics-icon"><i class="icon-hourglass"></i>
              </div>
              <div class="statistics-content">
                <h5><span data-count="8000" class="statistics-count">8000</span></h5><span>Hours of Work</span>
              </div>
            </div>
          </div>
          
          <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="statistics bg-color-5">
              <div class="statistics-icon"><i class="icon-cup"></i>
              </div>
              <div class="statistics-content">
                <h5><span data-count="4000" class="statistics-count">4000</span></h5><span>Cup of Coffee</span>
              </div>
            </div>
            </div>

         </div>
       </div>
    </section>
    <!-- statistics end -->

    
    
    
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
       <!-- Call to Action End -->
       
       
       
       
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
                  <form method="POST" action="index.php" class="contact-us pattern-bg">
                    
					  <div class="col-sm-6">
						<div class="form-group">
						  <input type="text" id="name" name="numeroControl" class="form-control" placeholder="Numero de Control">
						 </div>
            </div>
              <div class="col-sm-6">
					    <div class="form-group">
						 <input type="text" id="email" name="nombre" class="form-control" placeholder="Nombre">
						 </div>
                        </div>
                        
                        <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="website" name="apePa" class="form-control" placeholder="Apellido Paterno">
						   </div>
                          </div>
                          
                        <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" name="apeMa" class="form-control" placeholder="Apellido Materno">
						   </div>
                          </div>
                          <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" name="telefono" class="form-control" placeholder="Telefono">
						   </div>
                          </div>
                          <div class="col-sm-6">
						  <div class="form-group">
							<input type="text" id="address" name="email" class="form-control" placeholder="Email">
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
                      echo("<option value='".$carrera[0]."'>".$carrera[1]."</option>");
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
                      echo("<option value='".$taller[0]."'>".$taller[1]."</option>");
                    }
                ?>
						   </select>
                          </div>
                    <div class="text-center">      
		               <button type="submit" class="button button-style button-style-dark button-style-color-2">Regristarse</button>
	                  </div>
                       
                    <?php
                          agregarAlumno();
                          function agregarAlumno(){
                              @$matricula = $_POST["numeroControl"];
                              @$nombre = $_POST["nombre"];
                              @$apePa = $_POST["apePa"];
                              @$apeMa = $_POST["apeMa"];
                              @$telefono = $_POST["telefono"];
                              @$email = $_POST["email"];
                              @$carrera = $_POST["carrera"];
                              @$taller = $_POST["taller"];
                              require("conexion/conexion.php");

                              //Hacer sentencia
                              $SQL = "INSERT INTO alumno VALUES('$matricula','$nombre','$apePa'
                              ,'$apeMa','$telefono','$email','$carrera','$taller')";

                              //Ejecutar sentencia
                              $Ejecutar = mysqli_query($conec,$SQL);

                             
                          }

                    ?>
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