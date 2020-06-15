<?php
$peso = 62.6;
$altura = 1.65;

$imc = $peso / ($altura * $altura);

if($imc <18.4)
{
    echo ("Su masa corporal es de: ".$imc."¡¡TIENE INSUFICIENCIA DE PESO!!");
}
else if($imc >= 18.5 && $imc <= 24.9)
{
    echo ("Su masa corporal es de: ".$imc." ¡FELICITACIONES! Usted tiene un peso normal.");
}
else if($imc 25 >= && $imc <= 29.9 )
{
    echo ("Su masa corporal es de: ".$imc." ¡TENGA CUIDADO! Usted tiene un SOBRE PESO.");
}
else if($imc 30 >= && $imc <= 34.9 ) 
{
    echo ("Su masa corporal es de: ".$imc." ¡TENGA CUIDADO! Usted tiene un OBESIDAD I.");
}
}
else if($imc 35 >= && $imc <= 39.9 ) 
{
    echo ("Su masa corporal es de: ".$imc." ¡TENGA CUIDADO! Usted tiene un OBESIDAD II.");
}
else 
{
    echo ("Su masa corporal es de: ".$imc." ¡TENGA CUIDADO! Usted tiene un OBESIDAD III.");
}

?>