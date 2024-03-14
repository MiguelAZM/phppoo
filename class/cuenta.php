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


    public function setNrcuenta ($nrocuenta){
        $this->nrocuenta=$nrocuenta;
    }

    public function setTipointeres ($tipointeres){
        $this->tipointeres=$tipointeres;
    }

    public function setSaldo ($saldo){
        $this->saldo=$saldo;
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function getNrcuenta(){
        return $this->nrocuenta;

    }
    public function getTipointeres(){
        return $this->tipointeres;
    }

    public function getSaldo(){
        return $this->saldo;
    } 

    public function descipcion(){
        echo"titular de la cuenta:". $this->nombre."<br>";
        echo"numero de cuenta:". $this->nrocuenta."<br>";
        echo"tipo de interes:". $this->tipointeres."<br>";
        echo"Saldo es :". $this->saldo."<br>";
    }

    public function ingreso($monto){
        $ingresocorrecto=0;
        if ($monto <=0){
            $ingresocorrecto= false;
        }else{
            $this->saldo+=$monto;
        }

    }
}



?>