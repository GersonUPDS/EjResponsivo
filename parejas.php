<!DOCTYPE html>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
         <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h1 class="h3">Datos personales</h1>
                        </div>
                        <div class="card-body">
                              <?php if ( isset($_POST["nom"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Nombre:</span>
                                    <span><?php
                                       print($_POST["nom"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["email"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Email:</span>
                                    <span><?php
                                       print($_POST["email"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["gen"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">gen:</span>
                                    <span><?php
                                       print($_POST["gen"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["nom"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Nombre:</span>
                                    <span><?php
                                       print($_POST["nom"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["nom"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Nombre:</span>
                                    <span><?php
                                       print($_POST["nom"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["nom"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Nombre:</span>
                                    <span><?php
                                       print($_POST["nom"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["nom"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Nombre:</span>
                                    <span><?php
                                       print($_POST["nom"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                             <?php if ( isset($_POST["nom"])) :    ?>
                              <div>
                                 <p>
                                    <span class="fw-1">Nombre:</span>
                                    <span><?php
                                       print($_POST["nom"]); 
                                          ?></span>   
                                 </p>
                              
                              </div>
                             <?php endif ?> 
                        </div>
                     </div>
                        

                  </div>
               </div>
         </div>

    </body>
</html>
<?php 
/*

 if ( isset($_POST["gen"]) ) {
    print("genero ");
    print($_POST["gen"]);
    print("<br>");
 }
 if ( isset($_POST["fechaNac"]) ) {
    print("fecha Nacimiento ");
    print($_POST["fechaNac"]);
    print("<br>");
 }
 if ( isset($_POST["profesion"]) ) {
    print("profesion ");
    print($_POST["profesion"]);
    print("<br>");
 }
 if ( isset($_POST["salario"]) ) {
    print("salario ");
    print($_POST["salario"]);
    print("<br>");
 }
 if ( isset($_POST["casado"]) ) {
    print("casado ? ");
    print($_POST["casado"]);
    print("<br>");
 }
 if ( isset($_POST["comentarios"]) ) {
    print("comentarios ");
    print($_POST["comentarios"]);
    print("<br>");
 }
*/
?>