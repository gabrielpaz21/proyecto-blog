<?PHP
session_start();
//se inicia la seccion y si no esta abierta se redirige al index.php(pagina principal)
if(!$_SESSION["usuario"]){
    header("Location:index.php");
}

$strTitle = "Hacer Publicacion";
require ("includes/header.php");
require('conexionbd.php');
?>
    <?PHP if(isset($_SESSION["mensaje1"]) && isset($_SESSION["mensaje2"])&& isset($_SESSION["mensaje3"])){?>
               
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?PHP echo $_SESSION["mensaje1"]; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?PHP echo $_SESSION["mensaje2"]; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><?PHP echo $_SESSION["mensaje3"]; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
    <?PHP        
                $_SESSION["mensaje1"]=null;
                $_SESSION["mensaje2"]=null; 
                $_SESSION["mensaje3"]=null;      
            }
    ?>
    
    <div class="container text-center">
        <h2 class="text-success display-4">Nueva publicacion</h2>
        <form action="insertar contenido.php" method="POST" enctype="multipart/form-data" name="form1">
            <div class="form-group">
                <label class="text-success lead" for="campo_titulo">Título:</label>
                <input type="text" class="form-control bg-light" name="campo_titulo" maxlength="70" id="campo_titulo" required>
            </div>
            
            <div class="form-group">
                <label class="text-success lead" for="area_comentarios">Comentarios: </label>     
                <textarea name="area_comentarios" class="form-control bg-light" minlength="70" id="area_comentarios" rows="10" cols="50" required></textarea>
            </div>
           
            <input type="hidden" name="MAX_TAM" value="2097152">
            
            <p class="text-success lead">Seleccione una imagen con tamaño inferior a 2 MB<p>

            <div class="form-group">
                <label class="text-success lead" for="imagen">Imagen para la publicacion</label>
                <input type="file" class="form-control-file text-success" name="imagen" id="imagen">
            </div>

            <div class="form-group inline">     
                <input type="submit" class="btn btn-success" name="btn_enviar" id="btn_enviar" value="Enviar">      
            </div>      

            <a class="btn btn-success button-inline" href="administrador.php" role="button">Administrador</a>
        </form>
    </div>
<?PHP
mysqli_close($miConexion);
require ("includes/footer.php");
?>