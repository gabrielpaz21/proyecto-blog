<?PHP

try{

    require('conexionbd.php');
    $usuario=$_POST["usuario"];
    $password=$_POST["password"];
    $consulta="SELECT * FROM administrador where usuario= '$usuario' and password='$password'";
    $resultado=mysqli_query($miConexion,$consulta);
    $numero_filas = mysqli_num_rows($resultado);

    if($numero_filas!=0){
        session_start();
        $_SESSION["usuario"]=$usuario;
        header("Location:administrador.php");
    }else{
        header("Location:index.php");
    }

}catch(Exception $e){

    die("Error: ". $e->getMessage());
}






?>