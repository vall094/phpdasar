<?php

$x = 10;
while ($x < 5){
    echo "Nomor = $x <br>";
    $x--;
}

$x = 1;
do{
    echo "Nomor : $x <br>";
    $x++;
}while($x <= 5);

$colors = array("red", "green", "pink", "yellow");
foreach($colors as $value) {
    echo "$value <br>";
}

for ($x = 0; $x < 10; $x++){
    if($x==4){
        break;
    }
    echo "Nomor : : $x <br>";
}
?>