<?php

class Vuelo{
    private $numero;
    private $importe;
    private $fecha;
    private $destino;
    private $horaDeArribo;
    private $horaDePartida;
    private $cantidadAsTotal; //? Cantidad de asientos totales
    private $cantidadAsDispo; //? Cantidad de asientos disponibles
    private $piloto;

    public function __construct($numero,$importe,$fecha,$destino,$horaDeArribo,$horaDePartida,$cantidadAsTotal,$cantidadAsDispo,$piloto){
        $this->numero = $numero;
        $this->importe = $importe;
        $this->fecha = $fecha;
        $this->destino = $destino;
        $this->horaDeArribo = $horaDeArribo;
        $this->horaDePartida = $horaDePartida;
        $this->cantidadAsTotal = $cantidadAsTotal;
        $this->cantidadAsDispo = $cantidadAsDispo;
        $this->piloto = $piloto;
    }

    //* Getters

    public function getNumero(){
        return $this->numero;
    }

    public function getImporte(){
        return $this->importe;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getDestino(){
        return $this->destino;
    }

    public function getHoraDeArribo(){
        return $this->horaDeArribo;
    }

    public function getHoraDePartida(){
        return $this->horaDePartida;
    }

    public function getCantidadAsTotal(){
        return $this->cantidadAsTotal;
    }

    public function getCantidadAsDispo(){
        return $this->cantidadAsDispo;
    }

    public function getPiloto(){
        return $this->piloto;
    }


    //* Setters
    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setImporte($importe){
        $this->importe = $importe;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function setDestino($destino){
        $this->destino = $destino;
    }

    public function setHoraDeArribo($horaDeArribo){
        $this->horaDeArribo = $horaDeArribo;
    }

    public function setHoraDePartida($horaDePartida){
        $this->horaDePartida = $horaDePartida;
    }

    public function setCantidadAsTotal($cantidadAsTotal){
        $this->cantidadAsTotal = $cantidadAsTotal;
    }

    public function setCantidadAsDispo($cantidadAsDispo){
        $this->cantidadAsDispo = $cantidadAsDispo;
    }

    public function setPiloto($piloto){
        $this->piloto = $piloto;
    }


    public function asignarAsientosDisponibles($cantidadDePasajeros){
        $respuesta = false;
        $cantDisp = $this->getCantidadAsDispo();


        if( $cantidadDePasajeros <= $cantDisp){
            $cantDisp = $cantDisp - $cantidadDePasajeros;
            $respuesta = true;
            $this->setCantidadAsDispo($cantDisp);
        }

        return $respuesta;
    }

}