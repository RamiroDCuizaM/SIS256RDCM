/*3.-  Encontrar el mayor y el menor de 5 números, imprimir los resultados en dos cuadros con bordes de color rojo*/
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor y Menor</title>
    <style>
        h2 {
            border: 2px solid red;
        }
    </style>    
</head>
<body>

<?php
$numeros=[3,7,2,6,4];
$mayor=$numeros[0];
$menor=$numeros[0];
foreach($numeros as $numero)
{
    if($numero > $mayor)
    {
       $mayor=$numero;
    }
    if($numero < $menor)
    {
      $menor=$numero;
    }
}
?>

<h2> <?php echo "Este es el mayor: $mayor <br>"?> </h2>
<h2> <?php echo "Este es el menor: $menor <br>"?> </h2>

</body>
</html>

