<?PHP

$strTitle = "Publicacion";
require ("includes/header.php");
require('conexionbd.php');

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
}    
$consulta="SELECT * FROM contenido where id=$id";
        
if($resultado=mysqli_query($miConexion,$consulta)){
    $registro=mysqli_fetch_assoc($resultado);
?>            
    <section class="main container">
        <div class="row">
            <div class="col-md-2">

            </div>
            <section class=" posts bg-light col-md-8 px-4 py-4 text-center">
                <article class="post clearfix">
             
                    <h3 class="post-title text-success">
                        <?php echo $registro["Titulo"];?>
                    </h3>

            <?php                
                if ($registro["Imagen"]!=""){
            ?>      
                    <img src='imagenes/<?php echo $registro["Imagen"];?>' width='300px'/>                 
            <?php                
                }
            ?> 
            
                    <p class="post-contenido">
                        <div class='text-dark lead text-justify'><?php echo $registro["Comentario"];?></div>
                    </p>

                    <p><span class="post-fecha"><?php echo $registro["Fecha"]?></span></p>

                </article>
            </section>
            <div class="col-md-2">

            </div>
        </div>
    </section>
    <br/>
    
<?php            
}
mysqli_close($miConexion);
require ("includes/footer.php");
?>