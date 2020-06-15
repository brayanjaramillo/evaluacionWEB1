<?php
$horastrabajadas = 36;
$horasextras = 0;
$valorHoraBasica = 20000;
$valorHoraExtra = 25000;

if($horastrabajadas <= 40)
{
    echo("Su sueldo semanal es: ".($horastrabajadas * $valorHoraBasica));
}
else if($horastrabajadas > 40)
{
    echo ("Su sueldo semanal es: ".(($horastrabajadas * $valorHoraBasica) + ($horasextras * $valorHoraExtra)));
}

?>