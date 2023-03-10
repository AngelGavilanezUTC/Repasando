<!--UTILIZO UNA BIBLIOTECA DE MYSQL, LA CUAL ES MYSQL LI-->
<!--USO el OBJETO CONN PARA GUARDAR ALL VALUES-->
<?php

/*para mandar mesajes de alertas cuando guarde un registro*/
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);

// if (isset($conn)) {
//     echo 'LA BASE ESTA CONECTADA';
// }

?>
<!-- MINUTOS 35:00-->