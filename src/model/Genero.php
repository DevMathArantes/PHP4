<?php

    /*
        Estrutura enum:
        enum X : Z{
            case Y1 = N1;
            case Y2 = N2;
            ...
            case Yn = Nn;
        }
        Criou-se um tipo de variável X que só poderá receber valores Y
        Observação: os valores podem ou não possuir atribuições que devem ser do tipo Z e podem ser acessadas por 
        X->value e seus nomes por X->value, para ver qual valor baterá com qual nome, utilize: Y::from(N)
    */
    enum Genero : string{
        case Acao = "Ação";
        case Terror = "Terror";
        case Comedia = "Comédia";
        case Ficcao = "Ficção";
    }