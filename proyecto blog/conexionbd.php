<?php
         //iniciando una seccion
    $host = "localhost"; 	//TU HOST//
    $dbuser = "root";	 	//TU USUARIO DEL HOST//
    $dbpwd = "";	//TU CONTRASE�A//
    $db = "bbddblog";		//TU BASE DE DATOS//

    //haciendo una coneccion con la base de datos
    $miConexion=mysqli_connect($host ,$dbuser,$dbpwd,$db);
    //ajustando el conjunto de caracteres con la cual la coneccion va a trabajar
    mysqli_set_charset($miConexion,"utf8");
    
    //comprobacion  de coneccion
    if(!$miConexion){
        echo "la coneccion ha fallado". mysqli_error();
        exit();
    }
?>