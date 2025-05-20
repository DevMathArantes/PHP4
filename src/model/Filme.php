<?php

    namespace src\model;

    /*
        O comando:
        class X {
            N1 Y1 Z1
            N2 Y2 Z2
            ...
            Nn Yn Zn 
        }
        Cria uma classe X com atributos Z publicos do tipo Y e acesso N 
    */
    class Filme extends Titulo{

        public function __construct(
            string $nome, 
            int $ano, 
            Genero $genero,
            public readonly int $duracaoMinutos){
                parent::__construct($nome, $ano, $genero);
        }

        public function tempoTotal() : int{
            return $this->duracaoMinutos;
        }

    }