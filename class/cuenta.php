<?php
class Cuenta
{
    private $nombre;
    private $nrocuenta; 
    private $tipointeres; 
    private $saldo;
    public function __construct($nombre, $nrocuenta,$saldo,$tipointeres)
    {
        
    
        $this-> nombre = $nombre;
        $this-> nrocuenta= $nrocuenta;
        $this -> tipointeres= $tipointeres;
        $this-> saldo =$saldo;
    }
    public function setNombre ($nombre){
        $this->nombre=$nombre;
    }
}


?>