<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            justify-content: center;
            margin: 0 auto;*/
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>

<?php
echo "<table border='3'>"; 

for ($fila = 0; $fila < 8; $fila++) {
    echo "<tr>"; 
    for ($colum = 0; $colum < 8; $colum++) { 
        
        $total = $fila + $colum;
        if ($total % 2 == 0) 
        {
            echo "<td class='white'></td>"; 
        } 
        else 
        {
            echo "<td class='black'></td>"; 
        }
    }
    echo "</tr>"; 
}

echo "</table>";
?>

</body>
</html>
