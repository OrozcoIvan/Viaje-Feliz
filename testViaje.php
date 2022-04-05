<?php
include "Viaje.php";

$coleccionPasajero[0]=Viaje::cargarDatos(41092156,'Juan','Gomez');
$coleccionPasajero[1]=Viaje::cargarDatos(12212156,'Ivan','Orozco');
$coleccionPasajero[2]=Viaje::cargarDatos(21412456,'Leonardo','Orozco');
$coleccionPasajero[3]=Viaje::cargarDatos(12213236,'Ana','Mariñir');

//nuevo objeto = ($codViaje, $destino, $maxPasajeros, $coleccionPasajero)
$objViaje= new Viaje (1,'Bariloche', 30, $coleccionPasajero );

function CargarNuevosDatos()
{
    echo "Ingrese el codigo del vuelo: ";
    $codViaje = trim(fgets(STDIN))."\n";
    echo "Ingrese destino del vuelo: ";
    $destino = trim(fgets(STDIN))."\n";
    echo "Ingrese la cantidad máxima de pasajeros: ";
    $maxPasajeros = trim(fgets(STDIN))."\n";

    //Recorrido for para cargar el Arreglo Asosiativo de PASAJEROS Y Cargar La COLECCION DE PASAJEROS
    for($i=0; $i < $maxPasajeros; $i++) { 
        echo "Ingrese el DNI del pasajero: ";
        $DNI=trim(fgets(STDIN));
        echo "Ingrese el nombre del pasajero: ";
        $nombre=(trim(fgets(STDIN)));
        echo "Ingrese el apellido del pasajero: ";
        $apellido=(trim(fgets(STDIN)));

        $coleccionPasajero[$i]= Viaje::cargarDatos($DNI,$nombre,$apellido);
    }
    $objetoViaje = new Viaje($codViaje, $destino, $maxPasajeros, $coleccionPasajero);
    return $objetoViaje;
}

// Opcion del menu
do{
    $opcion = seleccionarOpcion();
    switch($opcion){
        case '1':
            echo "Carge datos del Viaje"."\n";
            $objViaje=CargarNuevosDatos();
        break;
        case '2':
            echo "Elija lo que desea modificar: \n";
            $objViaje->modificarViaje();
        break;
        case '3':
            echo "Ver Datos.\n";
            echo $objViaje;
        break;
    }
}while($opcion!=4);

function seleccionarOpcion(){
    $min = 1;
    $max = 4;
    echo "\n MENU DE OPCIONES: \n
            1)- Cargar datos de Viaje.\n
            2)- Modificar.\n
            3)- Ver Datos.\n
            4)- Salir.\n";
    $opcion = solicitarNumeroEntre(1, 4);
    return $opcion;
}

function solicitarNumeroEntre($min, $max){
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}


?>