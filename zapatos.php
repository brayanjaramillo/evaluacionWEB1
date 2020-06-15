<?php
$cantidadZapatos = 5;
$costoneto = 150000;
$totalCompra = ($cantidadZapatos * $costoneto);

if ($cantidadZapatos == 3) 
{
  $valordescuento = $totalCompra * 0.10;

} 
else if ($cantidadZapatos > 3 && $cantidadZapatos <=5)
{
  $valordescuento = $totalCompra * 0.20;

}
else if ($cantidadZapatos > 5) 
{
  $valordescuento = $totalCompra * 0.40;

}
$valorPagar = ($cantidadZapatos * $costoneto) - $valordescuento;
echo ( "Cantidad vendida:".$cantidadZapatos." <br> Coste Neto:".$totalCompra." <br> Valor del Descuento:".$valordescuento." <br> Valor a pagar es:".$valorPagar);

?> 