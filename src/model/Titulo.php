<?php 

    class Titulo{

        /*
            A visibilidade public faz com que a variável seja acessivel em outros arquivos
            
            A visibilidade private faz com que a variável só possa ser acessada no arquivo onde foi declarada

            A visibilidade protected faz com que a variável possa ser acessada normalmente pelas classes filhas
        */

        private array $notas;

        /*
            Método construtor:
            public function __construct(private $N1, private $N2..., private $Nn){
            }

            Para uma classe Y com esse método construtor, os setters poderiam ser substituidos durante a própria 
            criação do objeto com $O = new Y(Z1, Z2..., Zn); atribuindo os valores Z aos atributos N

            A única função que pode criar atributos através dos parâmetros é o método __construct()
        */

        public function __construct(

            /*
                A propriedade readonly faz com que a variável só possa ser atribuída uma única (o valor dela não poderá 
                ser mudado em hipótese alguma) vez e isso deve ocorrer especificamente na classe onde ela foi criada 
                (nem mesmo em classes filhas)
            */

            public readonly string $nome, 
            public readonly int $ano, 
            public readonly Genero $genero,){

            //O comando $this->X referência o atributo X do objeto
            $this->notas = [];
        }

        public function receberNota(float $nota): void{
            
            //O comando $this->X referência o atributo X do objeto
            $this->notas[] = $nota;
        }

        public function calcularMedia() : float{
            $notas = $this->notas;
            $totalNotas = array_sum($notas);
            return  array_sum($notas)/count($notas);
        }

        /*
            O polimorfismo é possivel através da herança, pois todo objeto pode se comportar tanto como sendo da classe
            filha como sendo da classe pai, por exemplo ao sobreescrever um método em 1 classe pai e 2 classes filhas, o
            método vai se comportar de acordo com o objeto chamado.
        */
        public function tempoTotal() : int{
            return 0; 
        }

    }