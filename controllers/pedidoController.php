<?php

class pedidoController{

    public function hacer(){
        require_once 'views/pedido/hacer.php';
    }

    public function add(){
        if(isset($_SESSION['identity'])){

            //Verificar los datos llegados por POST

            $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad']:false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion']:false;

            if($ciudad && $direccion){
                
                //Guardar datos del pedido
                
                $pedido = new Pedido();
                $usuarioId = $_SESSION['identity']->id_usuario;

                var_dump($usuarioId);
            }
        }
    }
}
