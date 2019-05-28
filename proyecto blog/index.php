<?PHP
$strTitle = "Gabriel Publica";
require ("includes/header.php");
  
require('conexionbd.php');
$consulta="SELECT * FROM contenido ORDER BY Fecha DESC ";
        
if($resultado=mysqli_query($miConexion,$consulta)):
    while ($registro=mysqli_fetch_assoc($resultado)):
?>            
        <section class="main container">
            <div class="row">
                
                <div class="col-md-2">

                </div>
                <section class="posts bg-light col-md-8 px-4 py-4 text-center">
                    <article class="post clearfix">
             
                        <h3 class="post-title">
                            <a href="mostrar noticia.php?id=<?php echo $registro['id']?>"><?php echo $registro["Titulo"];?></a>
                        </h3>
                    <?php                
                        if ($registro["Imagen"]!=""):
                    ?>    
                            <a href="mostrar noticia.php?id=<?php echo $registro['id']?>" class="thumb pull-left">
                                <img src='imagenes/<?php echo $registro["Imagen"];?>' width='300px' class="img-responsive"/>
                            </a>
                    <?php endif;?>
                     
                        <p class="post-contenido">
                            <div class='text-dark lead text-center'><?php echo substr($registro["Comentario"],0,70) . "..."?></div>
                        </p> 
                        <p><span class="post-fecha"><?php echo $registro["Fecha"]?></span></p>

                        <div class="text-right">
                            <a class="btn btn-success" href="mostrar noticia.php?id=<?php echo $registro['id']?>">Leer mas</a>          
                        </div>
                         
                    </article>
                </section>
                <div class="col-md-2">

                </div>
               
            </div>
        </section>
        <br/>
<?php            
    endwhile;
endif;

mysqli_close($miConexion);
require ("includes/footer.php");
?>
