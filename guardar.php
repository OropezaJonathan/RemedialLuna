<?php
    require_once('conexion.php');

    $nombre = $_POST['nombre'];
    $ap = $_POST['apellidoP'];
    $am = $_POST['apellidoM'];
    $correo = $_POST['correo'];
    $psw = $_POST['psw'];

    $insertar = "INSERT INTO nuevos VALUES ('$nombre','$ap','$am','$correo','$psw')";

    $query = mysqli_query($conexion, $insertar);

    if($query){

        echo "<script> alert('Datos guardados correctamente. :)');
        location.href='index.php'; 
        </script>";
    }else{
        echo "<script> alert('Datos no guardados correctamente. :(');
        location.href='index.php'; 
        </script>";
    }
?>