<?php

class Aerolinea{
    private $identificacion;
    private $nombre;
    private $coleccionVuelosProg;

    public function __construct($identificacion,$nombre){
        $this->identificacion = $identificacion;
        $this->nombre = $nombre;
        $this->coleccionVuelosProg = [];
    }


    //* Getters
    public function getIdentificacion(){
        return $this->identificacion;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getColeccionVuelosProg(){
        return $this->coleccionVuelosProg;
    }

    //* Setters
    public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setColeccionVuelosProg($coleccionVuelosProg){
        $this->coleccionVuelosProg[] = $coleccionVuelosProg;
    }


    //* Metodo toString
    public function __toString(){
        $cadena = "Identificacion: ". $this->getIdentificacion() . "\n";
        $cadena .= "Nombre: ".$this ->getNombre()."\n";
        $cadena .= "Los Vuelos: ".$this ->getColeccionVuelosProg() ."\n";

        return $cadena;
    }

    public function darVuelosADestino($destino,$cantAsientos){
        $colVuelos=array();
        $colVuelosAerolinea = $this->getColeccionVuelosProg();

        foreach ($colVuelosAerolinea as $objVuelo){
            $destinoDelAvion = $objVuelo->getDestino(); //? Optenemos el destino del vuelo

            $asientosDisponibles = $objVuelo->getCantidadAsDispo(); //? Optenemos la cantidad de asientos disponibles del vuelo
            if($destinoDelAvion == $destino && $asientosDisponibles >= $cantAsientos){
                array_push($colVuelos,$objVuelo);
            }
        }

        return $colVuelos;
    }


    //? Este metodo devolvera verdadero si se encuntra un vuelo con el mismo destino, en caso contrario devolvera falso
    public function incorporarVuelo($objVuelo){
        $vuelos = $this->getColeccionVuelosProg();
        $i = 0;
        $hayVueloConEseDestino = false;
        $destinoDelVuelo = $objVuelo->getDestino();

        while ($i<count($vuelos) && !$hayVueloConEseDestino){
            $destinoDelVueloDeLaColeccion = $vuelos[$i]->getDestido();
            
            if($destinoDelVuelo == $destinoDelVueloDeLaColeccion){
                $hayVueloConEseDestino = true;
            }
        }

        return  $hayVueloConEseDestino;
    }

    public function venderVueloADestino($cantidadDeAsientos, $destino, $fecha){
        $vuelos = $this->getColeccionVuelosProg();
        $i = 0;
        $seEncontroElVuelo = false;

        while($i < count($vuelos) && !$seEncontroElVuelo){
            $vuelo = $vuelos[$i]; //? Obtengo el objeto vuelo de la oleccion de vuelos programados
            if($vuelo->getDestino() == $destino && $cantidadDeAsientos <= $vuelo->getCantidadAsDispo() && $fecha == $vuelo->getFecha()){
                $vuelo->asignarAsientosDisponibles($cantidadDeAsientos);
                $seEncontroElVuelo = true;
            }
        }

        return $seEncontroElVuelo;

    }
}