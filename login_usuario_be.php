<?php

include 'conecxion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena']; 

$validar_login = mysqli_query($conecxion, "SELECT * FROM usuarios WHERE correo = '$correo'
 AND contrasena = '$contrasena'");
 if (mysqli_num_rows($validar_login)>0){
    header("Location: ../orochiapas.php");
    exit();
} else {
    echo '
     <script> 
         alert("Usuario no existe, por favor verifique los datos introducidos");
         window.location = "../index.php";
     </script>
    ';
}

?>
