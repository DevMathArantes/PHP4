<?php

    class CalcMaratona{

        private int $duracaoMinutos = 0;

        public function addMaratona(Titulo $titulo) : void{
            $this->duracaoMinutos += $titulo->tempoTotal();
        }

        public function maratona() : int{
            return $this->duracaoMinutos;
        }

    }