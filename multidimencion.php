<?php 


$productos=array(

    array("arroz",1600,"caribe"),
    array("aceite",5600, "premier"),
    array("sal", 1000, "refisal"),

);   

print_r($productos);
echo("<br>");
echo($productos[0][0]);

//recorrido
foreach($productos as $valores) {

    echo($valores[0]);
    echo("<br>");
}

?>