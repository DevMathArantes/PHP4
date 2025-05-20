<?php

    namespace src\model;

    //O comando trait é usado para criar uma trait (não pode ser utilizado como tipo)
    trait ComNota{

        private array $notas = [];

         public function receberNota(float $nota): void{
            $this->notas[] = $nota;
        }

        public function calcularMedia() : float{
            $notas = $this->notas;
            $totalNotas = array_sum($notas);
            return  array_sum($notas)/count($notas);
        }

    }