<?php

    namespace src\math;

    //Fora de uma classe, o comando use serve para usar um namespace
    use src\model\Titulo;

    class CalcMaratona{

        private int $duracaoMinutos = 0;

        public function addMaratona(Titulo $titulo) : void{
            $this->duracaoMinutos += $titulo->tempoTotal();
        }

        public function maratona() : int{
            return $this->duracaoMinutos;
        }

    }