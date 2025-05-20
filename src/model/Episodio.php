<?php

    namespace src\model;

    //O comando X implements Y implementa uma interface Y a uma classe X 
    class Episodio implements Avaliado{

        use ComNota;

        public function __construct(
            public readonly Serie $serie,
            public readonly string $nome,
            public readonly int $numero
        ){
        }

    }