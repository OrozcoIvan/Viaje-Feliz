<?php

class Viaje{
    private $codigoViaje;
    private $destinoViaje;
    private $cantidadMaxPasajero;
    private $coleccionPasajeros=[]; /*indica que este atributo es un array*/

    public function __construct($codViaje,$destino,$maxPasajeros,$coleccionPasajero){
        $this->codigoViaje= $codViaje;
        $this->destinoViaje= $destino;
        $this->cantidadMaxPasajero= $maxPasajeros;
        $this->coleccionPasajeros= $coleccionPasajero;
    }

    //GET
    public function getCodViaje(){
        return $this->codigoViaje;
    }
    public function getDestino(){
        return $this->destinoViaje;
    }
    public function getMaxPasajero(){
        return $this->cantidadMaxPasajero;
    }
    public function getColeccionPasajero(){
        return print_r($this->coleccionPasajeros);
    }
    
    //SET
    public function setCodViaje($codViaje){
        $this->codigoViaje = $codViaje;
    }
    public function setDestino($destino){
        $this->destinoViaje = $destino;
    }
    public function setMaxPasajero($maxPasajeros){
        $this->cantidadMaxPasajero= $maxPasajeros;
     }
    public function setColeccionPasajero($coleccionPasajero){
        $this->coleccionPasajeros = $coleccionPasajero;
    }

    public function __toString()
    {  return   " Codigo de viaje:".$this->getCodViaje().
                "\n Destino: ".$this->getDestino().
                "\n Maximo de pasajeros:  ".$this->getMaxPasajero().
                "\n Coleccion de pasajeros: ".$this->getColeccionPasajero();
    }

    public static function cargarDatos($DNI,$nombre,$apellido ){
        $pasajero = ['DNI'=>$DNI,
                     "nombre"=>$nombre,
                     "apellido"=>$apellido];
        return $pasajero;
    }

    public function ModificarDatos()
    {

    }

    function modificarViaje(){ 
        echo "\n1)- Codigo de vuelo.\n
              2)- Destino de vuelo.\n
              3)- Cantidad máxima de pasajeros.\n";
        $opcion=trim(fgets(STDIN));
        
        // lista de opciones según la elección del usuario
        switch($opcion){
            case 1:
                echo "Ingrese el nuevo código del vuelo: \n";
                $codigoNuevo=trim(fgets(STDIN));
                $this->setCodViaje($codigoNuevo); 
            break;
            case 2:
                echo "Ingrese el nuevo destino del vuelo:  \n";
                $destinoNuevo=trim(fgets(STDIN));
                $this->setDestino($destinoNuevo);
            break;
            case 3:
                echo "Ingrese la cantidad maxima de pasajeros: \n";
                $cantMaxNueva=trim(fgets(STDIN));
                $this->setMaxPasajero($cantMaxNueva);
            break;
            }

    }
   
}

?>