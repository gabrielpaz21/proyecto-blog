<?PHP
//se inicia la seccion y si no esta abierta se redirige al index.php(pagina principal)
session_start();
if(!$_SESSION["usuario"]){
    header("Location:index.php");
}  

require('conexionbd.php');
$id="";
$Titulo="";
$Comentario="";
if (isset($_GET['id'])) {
    //se toma el id por el metodo get que manda el boton actualizar
    $id=$_GET["id"];
    //se consulta mediante el id que se trajo
    $consulta="SELECT * FROM contenido WHERE id=$id";
    //se llama a un recordset o resultset y de alli se extrae la fila
    if($resultado=mysqli_query($miConexion,$consulta)){
        $registro=mysqli_fetch_assoc($resultado);
        //se extrae todos los datos del array asociativo y se guardan en variables para mostrarlas en los value del formulario de esta pagina
        $Titulo=$registro["Titulo"];
        $Comentario=$registro["Comentario"];
    }
}

if(isset($_POST["cr"])){
    $id=$_POST["id"];
    $Titulo=$_POST["campo_titulo"];
    date_default_timezone_set('america/caracas');
    $Fecha=date("Y-m-d h-i-s A");
    $Comentario=$_POST["area_comentarios"];
    $Imagen=$_POST["imagen"];
    $consulta="UPDATE contenido SET Titulo= '$Titulo' , Fecha='$Fecha' , Comentario='$Comentario' , Imagen='$Imagen' WHERE id=$id";
    $resultado=mysqli_query($miConexion,$consulta);
    header("Location:administrador.php");

}
$strTitle = "Hacer Publicacion";
require ("includes/header.php");

?>
    
    <div class="container text-center">
        <h2 class="text-success display-4">Nueva publicacion</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" name="form2">
            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">

            <div class="form-group">
                <label class="text-success lead" for="campo_titulo">Título:</label>
                <input type="text" class="form-control bg-light" name="campo_titulo" id="campo_titulo" maxlength="70" value="<?php echo $Titulo;?>" required>
            </div>
            
            <div class="form-group">
                <label class="text-success lead" for="area_comentarios">Comentarios: </label>     
                <textarea name="area_comentarios" class="form-control bg-light" minlength="70" id="area_comentarios" rows="10" cols="50" required><?php echo $Comentario;?></textarea>
            </div>
           
            <input type="hidden" name="MAX_TAM" value="2097152">
            
            <p class="text-success lead">Seleccione una imagen con tamaño inferior a 2 MB<p>

            <div class="form-group">
                <label class="text-success lead" for="imagen">Imagen para la publicacion</label>
                <input type="file" class="form-control-file text-success" name="imagen" id="imagen">
            </div>

            <input class="btn btn-success" type="submit" name="cr" id="cr" value="editar">
            
            <a class="btn btn-success" href="administrador.php" role="button">Administrador</a>
        </form>
    </div>
<?PHP

mysqli_close($miConexion);   
require ("includes/footer.php");
?>