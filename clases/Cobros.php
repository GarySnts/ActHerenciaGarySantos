<?php
    include_once('Empleado.php');
    class Cobros extends Empleado{
        public $bonificacion=0;
        public $comisionCobro=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->comisionCobro + $this->bonificacion;
            return $sueldoLiquido;
        }
        public function verDatos(){
            return parent::verDatos()
                ."<br>Bonificación: ". $this->bonificacion
                ."<br>comisión: ". $this->comisionCobro;
        }
    }
?>