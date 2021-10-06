<?php
include("conexion.php");

$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
session_start();
$_SESSION['usuario']=$usuario;

$consulta= "SELECT * FROM cliente where usuario='$usuario' and contrasenia='$contraseña'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    //$username=$usuario;
    header("location:index.php");
}else{
    ?>
    <?php
    //include("login.php");
    
    
        //<h1 class="bad">Error en la autentificación</h1>
        echo"<script> alert('Error de autentificación');
	   window.location.replace('https://lacasadelassalsas.000webhostapp.com/login.php'); </script>";

}
mysqli_free_result($resultado);
mysqli_close($conn);
?>