<?php


$conecxion = mysqli_connect("localhost", "root", "", "bdorochiapas");


if($conecxion){     
    echo  'Conectado exitosamente a la base de datos ';
}else{
    echo  ' No se ha podido conectar a la base de datos';
}


?>
