<?php 

    //O comando namespace serve para diferenciar arquivos de mesmo nome
    namespace src\model;
    
    //Quando uma classe não pode ser diretamente  instanciada, ela é abstrata (abstract proibe a instância)
    abstract class Titulo implements Avaliado{

        /*
            A visibilidade public faz com que a variável seja acessivel em outros arquivos
            
            A visibilidade private faz com que a variável só possa ser acessada no arquivo onde foi declarada

            A visibilidade protected faz com que a variável possa ser acessada normalmente pelas classes filhas

            Método construtor:
            public function __construct(private $N1, private $N2..., private $Nn){
            }

            Para uma classe Y com esse método construtor, os setters poderiam ser substituidos durante a própria 
            criação do objeto com $O = new Y(Z1, Z2..., Zn); atribuindo os valores Z aos atributos N

            A única função que pode criar atributos através dos parâmetros é o método __construct()
        */

        //O comando use funciona para trazer o conteúdo de uma trait (quando estiver dentro de uma classe) 
        use ComNota;

        public function __construct(

            /*
                A propriedade readonly faz com que a variável só possa ser atribuída uma única (o valor dela não poderá 
                ser mudado em hipótese alguma) vez e isso deve ocorrer especificamente na classe onde ela foi criada 
                (nem mesmo em classes filhas)
            */

            public readonly string $nome, 
            public readonly int $ano, 
            public readonly Genero $genero,){
        }



        /*
            O polimorfismo é possivel através da herança, pois todo objeto pode se comportar tanto como sendo da classe
            filha como sendo da classe pai, por exemplo ao sobreescrever um método em 1 classe pai e 2 classes filhas, o
            método vai se comportar de acordo com o objeto chamado.

            
            O atributo abstract faz com que um método de mesmo nome precise obrigatoriamente ser implementado em classes 
            filhas
        */
        abstract public function tempoTotal() : int;

    }