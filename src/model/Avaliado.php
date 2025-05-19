<?php

    namespace Src\Modelo;

    //Implementar uma interface em uma classe, a obriga a ter funções de mesmo nome que as da interface 
    interface Avaliado{

        public function receberNota(float $nota) : void;
        public function calcularMedia(): float;

    }