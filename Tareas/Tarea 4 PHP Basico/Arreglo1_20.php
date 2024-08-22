/* 1.-  Genera un arreglo de números del 1 al 20. Luego, utiliza un ciclo foreach para separar 
los números en dos arreglos diferentes: uno para los números pares y otro para los números impares. 
Imprime ambos arreglos al final. */ 
<br>
<?php
$numeros=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$pares=[];
$impares=[];
foreach($numeros as $numero)
{
    if($numero % 2 == 0)
    {
        $pares[]=$numero;
    }
    else
    {
        $impares[]=$numero;
    }
}
echo "Numeros Pares: <br>";
foreach($pares as $par)
{
  echo $par . "<br>"; 
}

echo "<br>";

echo "Numeros Impares:<br>";

foreach($impares as $impar)
{
    echo $impar . "<br>";
}
?>

