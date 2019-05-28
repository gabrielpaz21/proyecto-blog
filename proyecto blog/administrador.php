<?PHP
//se inicia la seccion y si no esta abierta se redirige al index.php(pagina principal)
session_start();
if(!$_SESSION["usuario"]){
    header("Location:index.php");
}
//se añade titulo de la pagina,header y coneccion a base de datos
$strTitle = "Administrador";
require ("includes/header.php");  
require('conexionbd.php');
//se consulta todas las publicaciones de la tabla contenido y despues las imprime de forma desendente
$consulta="SELECT * FROM contenido ORDER BY Fecha DESC";      
if($resultado=mysqli_query($miConexion,$consulta)):
    while ($registro=mysqli_fetch_assoc($resultado)):
?>      
            
        <section class="main container text-center">
            <div class="row">
                <div class="col-md-2">

                </div> 
                 <!-- en esta parte del codigo imprimo la informacion suministrada por el la base de datos-->
                <section class=" posts bg-light col-md-8 px-4 py-4">
                    <article class="post clearfix">
             
                        <h3 class="post-title text-center">
                            <a href="mostrar noticia admin.php?id=<?php echo $registro['id']?>"><?php echo $registro["Titulo"];?></a>
                        </h3>
                <?php                
                    if ($registro["Imagen"]!=""){
                ?>    
                        <a href="mostrar noticia admin.php?id=<?php echo $registro['id']?>" class="thumb pull-left">
                            <img src='imagenes/<?php echo $registro["Imagen"];?>' width='300px' class="img-responsive"/>
                        </a>
                <?php                
                    }
                ?> 
                        <p class="post-contenido">
                            <div class='text-dark lead text-center'><?php echo substr($registro["Comentario"],0,70) . "..."?></div>
                        </p> 

                        <p><span class="post-fecha"><?php echo $registro["Fecha"]?></span></p>
                                
                        <a href="delete.php?id=<?php echo $registro['id']?>" class="btn btn-success">Eliminar</a>
                        <a href="formulario_update.php?id=<?php echo $registro['id']?>" class="btn btn-success">Editar</a>
                        <div class="text-right">
                            <a class="btn btn-success" href="mostrar noticia admin.php?id=<?php echo $registro['id']?>">Leer mas</a>          
                        </div>
                    </article>
                </section>
                <div class="col-md-2">

                </div> 
            </div>
        </section>
        <div class="col-md-2">

        </div>
        <br/>
        <?php endwhile;?>           
        <div class="container text-center">
            <a class="btn btn-success" href="formulario.php" role="button">hacer una nueva publicacion</a>
        </div>

<?php            
endif;
// se cierra la seccion y se incluye el footer
mysqli_close($miConexion);
require ("includes/footer.php");
?>
