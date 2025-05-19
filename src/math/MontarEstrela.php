<?php

    namespace Src\Math;

    //O comando use pode servir para mostrar o namespace correto, ele pode receber apelidos com o comando as
    use \Src\Modelo\Avaliado as Ava;

    class MontarEstrela{

        public function converter(Ava $avaliado) : float{
            $nota = $avaliado->calcularMedia();

            //A função round(X) arredonda o valor de X
            return round($nota) / 2;
        }

    }