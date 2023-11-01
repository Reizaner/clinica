<?php
    class Horarios{
        private $id;
        private $descipcion;
        private $orden;

        
        public function __construct()
        {   
            $this->setId(0);
            $this->setDescipcion("");
            $this->setOrden(0);
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of descipcion
         */ 
        public function getDescipcion()
        {
                return $this->descipcion;
        }

        /**
         * Set the value of descipcion
         *
         * @return  self
         */ 
        public function setDescipcion($descipcion)
        {
                $this->descipcion = $descipcion;

                return $this;
        }

        /**
         * Get the value of orden
         */ 
        public function getOrden()
        {
                return $this->orden;
        }

        /**
         * Set the value of orden
         *
         * @return  self
         */ 
        public function setOrden($orden)
        {
                $this->orden = $orden;

                return $this;
        }
    }