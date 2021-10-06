<?php
    $host="localhost";
    $dbname="id16951677_proyecto";
    $userdb="id16951677_salsas";
    $passdb="73B&F%w?]TU-JhWe";
    
    $nombre = $_POST["nombre"]; 
    $pass = $_POST["contra"];
    $tel = $_POST["telefono"];
    $dir = $_POST["direccion"];

	$conn = mysqli_connect($host,$userdb,$passdb,$dbname);
	$query="INSERT INTO cliente (usuario, direccion, telefono, contrasenia) VALUES ('$nombre', '$dir', '$tel','$pass')";
	$res=mysqli_query($conn, $query);
		
	if($res){
	    echo"<script> alert('Usuario registrado');
	   window.location.replace('https://lacasadelassalsas.000webhostapp.com/'); </script>";
	}else{
	    echo"<script> alert('No se pudo registrar');
	    windows.history.go(-1);</script>";
	}
	
    
?>