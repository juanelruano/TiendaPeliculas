<?php

    class Pedido{
        private $id;
        private $usuarioId;
        private $ciudad;
        private $direccion;
        private $costo;
        private $estado;
        private $fecha;
        private $hora;

        private $db;

        public function __construct(){
            $this->db = Database::connect();
        }

        function getId(){
            return $this->id;

        }

        function getUsuarioId(){
            return $this->usuarioId;
            
        }

        function getCiudad(){
            return $this->ciudad;
            
        }

        function getDireccion(){
            return $this->direccion;
            
        }

        function getCosto(){
            return $this->costo;
            
        }

        function getEstado(){
            return $this->estado;
            
        }

        function getFecha(){
            return $this->fecha;
            
        }

        function getHora(){
            return $this->hora;
            
        }

        function setId($id){
            $this->id = $id;
        }

        function setUsuarioId($usuarioId){
            $this->usuarioId = $usuarioId;
        }

        function setCiudad($ciudad){
            $this->ciudad = $ciudad;
        }

        function setDireccion($direccion){
            $this->direccion = $direccion;
        }

        function setCosto($costo){
            $this->costo = $costo;
        }

        function setEstado($estado){
            $this->estado = $estado;
        }

        function setFecha($fecha){
            $this->fecha = $fecha;
        }

        function setHora($hora){
            $this->hora = $hora;
        }

    }