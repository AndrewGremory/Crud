<?php 
include('funciones.php');

    $vprogra=$_POST['programa'];

    $miconexion=conectar_bd('root', 'sena_bd');
    $resultado=consulta($miconexion, "insert into fichas (ficha_progra) values ('{$vprogra}') ");
    if ($resultado)
        {
            echo "Guardado exitoso";
        }
    ?>