<?php
session_start();
session_destroy(); // Cierra la sesión actual
header("Location: index.php"); // Redirige al usuario a la página de inicio u otra página después de cerrar la sesión
exit();
?>
