<?php

class Persona{

    private $nombre;
    private $apellido;
    private $direccion;
    private $mail;
    private $telefono;

    public function __construct($nombre,$apellido,$direccion,$mail,$telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->mail = $mail;
        $this->telefono = $telefono;
    }



    //* Getters

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getTelefono(){
        return $this->telefono;
    }


    //* Setters

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    //* Metodo toString

    public function toString(){
        $cadena  = "Nombre: ".$this->getNombre()."\n";
        $cadena .= "Apellido: ".$this->getApellido()."\n";
        $cadena .= "Direccion: ".$this->getDireccion()."\n";
        $cadena .= "Mail: ".$this->getMail()."\n";
        $cadena .= "Telefono: ".$this->getTelefono()."\n";

        return $cadena;
    }

}