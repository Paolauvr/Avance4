<?php

include 'conecxion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena= $_POST['contrasena'];

$query ="INSERT INTO usuarios(nombre_completo, correo, usuario, Contrasena) 
        VALUES('$nombre_completo','$correo', '$usuario','$contrasena' )";

         $verficar_correo = mysqli_query($conecxion, "SELECT * FROM usuarios WHERE correo='$correo' ");

        if(mysqli_num_rows($verficar_correo)> 0){
                echo '
                        <script>
                          alert("Este correo ya esta registrado,intenta con otro diferente");
                         window.location = "../index.php"; 
                        </script)
                ';
                exit();
        }

 //verificar que el usuario no se repita en la base de datos//
 $verficar_usuario = mysqli_query($conecxion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

  if(mysqli_num_rows($verficar_usuario)> 0){
                echo '
                         <script>
                           alert("Este usuario ya esta registrado,intenta con otro diferente");
                           window.location = "../index.php"; 
                         </script)
                ';
               exit();
        }


 
        $ejecutar=mysqli_query($conecxion, $query);
        
        if($ejecutar){
                 echo '
                    <script>
                         alert("Usuario almacenado exitosamente")
                         window.location = "../index.php";
                    </script>
                ';
        }else{
                 echo '
                     <script>
                         alert("Intentalo de nuevo, usuario no almacenado") 
                         window.location = "../index.php";
                      </script>
                ';
        }

        mysqli_close($conecxion);

?>