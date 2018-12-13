<?php
    require("conexion.php");
    

$sql="UPDATE prestamos SET  estatus= 'Entregado' WHERE id_prestamo='$_GET[id]'" ;

if(mysqli_query($conn,$sql)){
	echo "Actualización Exitosa";
}else{
	echo "No Se Pudo Actualizar";
}
    mysqli_close($conn);
    header("location:libros.php")
?>
