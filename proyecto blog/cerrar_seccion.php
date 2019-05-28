
<?php 
    //este pedaso de codigo cierra la seccion y redirigue al index.php la pagina principal
    session_start();
    session_destroy();
    header("Location:index.php");
?>