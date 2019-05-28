<?php
//se inicia la seccion y si no esta abierta se redirige al index.php(pagina principal)
    session_start();
    if(!$_SESSION["usuario"]){
        header("Location:index.php");
    }
    require('conexionbd.php');
       
    if($_FILES["imagen"]["error"]){

        switch($_FILES["imagen"]["error"]){

            case 1: //error execeso de tamaño de archivo
                $_SESSION["mensaje1"] = "El tamaño del archivo excede lo permitido por el servidor";
                break;
            case 2: //error de tamaño del archivo desde el formulario
                $_SESSION["mensaje1"] = "El tamaño del archivo execede 2 megas";
                break;
            case 3: //corrupcion de archivo falla en la subido al servidor
                $_SESSION["mensaje1"] = "Envio de archivo interrumpido";
                break;
            case 4: //no subio ninguna imagen
                $_SESSION["mensaje1"] = "No se ha enviado ningun archivo";
                break;
        }
    }else{
        $_SESSION["mensaje1"]="La imagen se a subido correntamente<br/>";

        if(isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK)){

            $destino_ruta="imagenes/";
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);
            $_SESSION["mensaje2"] = "El archivo " . $_FILES["imagen"]["name"] . " se ha copido en el directorio imagenes";
                
        }else{
            $_SESSION["mensaje2"] = "El archivo " . $_FILES["imagen"]["name"] . " no ha copido en el directorio imagenes";
        }
    }
    //guardando los datos traidos por el metodo post para insertarlos en la base de datos   
    $titulo=$_POST["campo_titulo"];
    date_default_timezone_set('america/caracas');
    $fecha=date("Y-m-d h-i-s A");
    $comentario=$_POST["area_comentarios"];
    $imagen=$_FILES["imagen"]["name"];
           
    $miConsulta="INSERT INTO contenido (Titulo,Fecha,Comentario,Imagen) VALUES ('" . $titulo . "','" . $fecha . "','" . $comentario . "','" . $imagen . "')";
        
    $resultado=mysqli_query($miConexion,$miConsulta);
    //cerrando coneccion
 
    $_SESSION["mensaje3"]="<br/>se ha agregado la publicacion<br><br/>"; 
    mysqli_close($miConexion);
    header("Location:formulario.php");
?>
