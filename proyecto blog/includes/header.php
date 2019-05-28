<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php print $strTitle;?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <style>
        body{
            background:black;
        }
        .jumbotron{
            background:#5cb85c;
            color:#f9f9f9;
        }
        footer{
            color:#f9f9f9;
        }
        .post-title a{
            color:#5cb85c;
        }
        a{
            color:#f9f9f9;
        }
        
    </style>
</head>
<body > 

    <header>                  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <?php
            if (session_status()==PHP_SESSION_ACTIVE) {
            ?>
                <a class="navbar-brand h1 text-success" href="administrador.php">Gabriel Publica</a>
            <?php  
            }else{
            ?>
                <a class="navbar-brand h1 text-success" href="index.php">Gabriel Publica</a>
            <?php    
            }
            ?>
            
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <?php 
                if(session_status()==PHP_SESSION_ACTIVE){
            ?>      
                    <a class="btn btn-outline-success my-2 my-sm-0 ml-auto" href="cerrar_seccion.php" role="button">Cerrar Seccion</a>      
            <?php 
                }else{
            ?>   
                    <button href="#ventana-emergente" class="btn btn-outline-success my-2 my-sm-0 ml-auto" data-toggle="modal" data-target="#exampleModal" type="button">Administrador</button>
            <?php  
                }  
            ?>      
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ingresar como administrador</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="validar_administrador.php" method="POST" name="form3">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Usuario:</label>
                                        <input type="text" class="form-control" name="usuario" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Contraseña:</label>
                                        <input type="password" class="form-control" name="password" id="message-text">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" name="validar" class="btn btn-success">Ingresar</button>
                                    </div>
                                </form>                              
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
        </nav>
    </header>

    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Gabriel Publica</h1>
            <p class="lead">Este es un blog personal además de escribir sobre lenguajes, herramientas, las opiniones expresadas son mías.</p>
        </div>
    </section>
   
       