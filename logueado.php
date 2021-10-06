<?php
include("conexion.php");
session_start();
$username=$_SESSION['usuario'];
if($username!=" " || $username!=null){
    //alert('Usuario registrado');
	    echo"<script> 
	   window.location.replace('https://lacasadelassalsas.000webhostapp.com/Menu.php'); </script>";
	}else{
	    echo"<script> alert('Debes iniciar sesión para continuar');
	    window.location.replace('https://lacasadelassalsas.000webhostapp.com/login.php');</script>";
	}

?>