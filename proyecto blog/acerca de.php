<?PHP
// incluye la platilla con footer y header con una informacion acerce del blog
$strTitle = "Acerca de";
require ("includes/header.php");
  
require('conexionbd.php');
?>
<div class="container ">
    <div class="bg-light">
        <div class="justify-content-center px-5 py-5 mx-5 my-5">
            <h1 class="display-4 text-center text-success">Acerca de Gabriel publica</h1>
            Este es un blog las opiniones expresadas son mías y no representan las de nadie más,
            Leí una vez que aprender constantemente es parte del oficio del programador y por este medio comparto las cosas que voy aprendiendo. El intercambio generado en posts técnicos me lleva a afirmar mis conocimientos intentando explicarlos, así como aprender cosas nuevas gracias a los aportes de los lectores. Me gusta aprender lenguajes y tecnologías nuevas y generalmente publico acerca de mis experimentos con ellas. También me gusta mucho ver conferencias técnicas y aprender lo más que pueda en el proceso.
        </div>
    </div>
</div>
<?php            
mysqli_close($miConexion);
require ("includes/footer.php");
?>