<?php
include_once './class/cuenta.php';

$mauro  = new Cuenta("pepito rene", "AAF002", 0.12,0);
$mauro-> descipcion();
$mauro -> setSaldo(5000000);
$mauro-> ingreso(1000000);
echo"nuevo SALDO ".$mauro -> getSaldo() ;

