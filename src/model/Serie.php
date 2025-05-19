<?php

    namespace Src\Modelo;

    //Para uma classe X receber herança de uma classe Y, utiliza-se: class X extends Y{...}
    class Serie extends Titulo{

        public function __construct(
            string $nome, 
            int $ano, 
            Genero $genero,
            public readonly int $temporadas,
            public readonly int $episodiosPorTemporada,
            public readonly int $duracaoEpisodio){

                //O comando parent::X() permite chamar um método X da classe pai
                parent::__construct($nome, $ano, $genero);
        }

        public function tempoTotal() : int{

            //O comando $this->X referência o atributo X do objeto
            return $this->temporadas * $this->episodiosPorTemporada * $this->duracaoEpisodio;
        }

    }