<?php
    if(isset($_POST["año_linea"])){
        // el formulario sí se envió, podemos leer los valores
        $año_linea = $_POST["año_linea"];
        $acontecimiento_linea = $_POST["acontecimiento_linea"];

        include "../conexion.php";
        
        $sql = "INSERT INTO `equipo4_nuestraCasa_linea_del_tiempo`(`idLinea`, `año_linea`, `acontecimiento_linea`) VALUES ('$año_linea', '$acontecimiento_linea')";
        ejecutar($sql);

        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";

    }else{
        //el formulario no se envió, redireccionanos la página a index.php
        echo "<script language = 'javascript'>";
        echo "window.location.assign('nuestra_casa.php');";
        echo "</script>";
    }
