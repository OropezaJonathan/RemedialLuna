<?php
    $usuario = $_POST['nombre'];
    $contraseña = $_POST['psw'];
    session_start();
    $_SESSION['usuario']=$usuario;

    include('conexion.php');

    $consulta = "SELECT * FROM nuevos where nombre= '$usuario' and psw ='$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:bienvenido.php");
    }else{    
        ?>
        <?php
        include("index.php");
        ?>
        <h1 class="bad">ERROR EN LA AUNTENTICACIÓN</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

