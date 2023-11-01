<?php
    class Horarios extends Conexion{
        
        public function listar(String $req)
        {
            $retorno = [];
            $datos = $this->query($req);

            foreach($datos as $key=>$value){

                $hora = new Horario();
                $hora->SetId($value["id"]);
                $hora->SetDescripcion($value["descripcion"]);
                $hora->SetOrden($value["orden"]);
                $retorno[]=$hora;
            }
            return $retorno;

        }


    }