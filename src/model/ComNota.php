<?php

    namespace src\model;

    use src\exceptions\NotaInvalida;

    //O comando trait é usado para criar uma trait (não pode ser utilizado como tipo)
    trait ComNota{

        private array $notas = [];

         public function receberNota(float $nota): void{
            if($nota < 0 || $nota > 10){

                /*
                    O comando throw serve para criar uma excessão, \InvalidArgumentException(X) serve para argumentos 
                    inválidos e retorna a mensagem X

                    É uma boa prática avisar seu uso, exemplo:

                    @throws NotaInvalida se nota for menor que 0 ou maior que 10
                */
                throw new NotaInvalida();
            }
            $this->notas[] = $nota;
        }

        public function calcularMedia() : float{

            /* 
                Use para tratar erros:
                try{
                    ...
                } catch(Y1 $y1){
                    ... 
                } catch(Y2 $y2){
                    ...
                } finally{
                    ... 
                }
                O comando executará normalmente o que estiver dentro do try, caso algo dê errado devido a uma excessão Y
                esperada, uma variável $y será criada com o erro atribuído e um novo bloco de execução (para obter o erro,
                use $y->getMessage() ). Ao final de tudo o bloco finally é executado independente do que aconteça  

                \Throwable serve para qualquer tipo de excessão

                \DivisionByZeroError pode ser usado em um erro de divisão por 0

                \ArgumentCountError pode ser um usado em um erro de argumentos em funções

                Exception serve para qualquer excessão
            */
            try{

                $notas = $this->notas;
                $totalNotas = array_sum($notas);
                return  array_sum($notas)/count($notas);

            } catch(\Throwable $erro1){
                echo "\n!!!\n" . $erro1->getMessage() . "\n!!!\n";
                return 0;
            } finally{
                echo "\n->Média foi calculada<-\n";
            }
        }

    }