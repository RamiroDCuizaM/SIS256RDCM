
<?php
include 'OperacionesCadena.php'; 

    $cadena = $_POST['cadena'];
    $operacion = $_POST['txtoperacion'];

    $operaciones = new OperacionesCadena($cadena);

    switch ($operacion) {
        case 'invertir':
            echo "Cadena invertida: " . $operaciones->invertir();
            break;
        case 'mayuscula':
            echo "Cadena en mayúsculas: " . $operaciones->mayuscula();
            break;
        case 'minuscula':
            echo "Cadena en minúsculas: " . $operaciones->minuscula();
            break;
        default:
            echo "Operación no válida.";
    }
?>
