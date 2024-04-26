<?php 
include('./conexion.php');

$sql = "SELECT * FROM usuarios";

$sql1 = "SELECT * FROM servicios WHERE categoria='graphics and design'";

$resultado = mysqli_query($conn,$sql);

$resultadoServicios = mysqli_query($conn, $sql1);

// while($fila = $resultado->fetch_assoc()){
//     echo "
//     <h1>Nombre:".$fila["nombre"]."</h1>
//     <h1>".$fila["contraseña"]."</h1>
//     <h1 >".$fila["email"]."</h1>
//     ";
// }

while( $fila2 = $resultadoServicios->fetch_assoc()){
    echo "
        <h1>".$fila2["nombre"]."</h1>
    ";
}
