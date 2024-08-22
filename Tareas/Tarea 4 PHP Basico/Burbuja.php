/* 2.-  Realizar un programa en php que permita ordenar mediante el método burbuja de un arreglo definido como 
$arreglo=[2,3,45,32,2,1,63,21,52,242,22,1] */

<?php
$arreglo=[2,3,45,32,2,1,63,21,52,242,22,1];
$aux;
for($i=0;$i<12;$i++)
{
    for($j=0;$j<11;$j++)
    {
        if($arreglo[$j] > $arreglo[$j+1])
        {
            $aux = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j+1];
            $arreglo[$j+1] = $aux;

        }
    }
}
echo "<br><br> Arreglo Ordenado <br>";
for($i=0;$i<12;$i++)
{
    echo $arreglo[$i] . " - ";
}
?>