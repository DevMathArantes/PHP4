<?php

    require __DIR__ . "/autoload.php";

    use src\exceptions\NotaInvalida;

    use src\model\{
        Serie, Episodio, Genero
    };
    use src\math\{
        MontarEstrela
    };

    try{
        $serie2 = new Serie("Ahsoka", 2023, Genero::Acao, 1, 8, 40);
        $serie2->receberNota(30);

        $episodio2 = new Episodio($serie2, "Parte 2", 2);

        $montarEstrela2 = new MontarEstrela();
        $montarEstrela2->converter($serie2);


    } catch(NotaInvalida $excessao){
        echo $excessao->getMessage();
        echo "\n----ALERTA VERMELHO----\n";
    }
    