<?php 

    require 'autoload.php';

    //O comando use X{Y} serve para trazer os namespaces dentro de {}
    use src\model\{
        Titulo, Filme, Serie, Genero, Episodio, Avaliado, ComNota
    };
    use src\math\{
        CalcMaratona, MontarEstrela
    };

    //Para atribuir valor a um enum, use X::Y para atribuir Y ao enum X
    $filme1 = new Filme("Star Wars: Ameaça Fantasma", 1999, Genero::Ficcao, 136);
    $filme1->receberNota(4.5);
    $filme1->receberNota(9.5);
    $filme1->receberNota(7.2);
    $filme1->receberNota(6.8);
    echo $filme1->nome . " recebeu a avaliação média " . $filme1->calcularMedia() . " de 10.\n\n"; 

    $filme2 = new Filme("Star Wars: Ataque dos Clones", 2002, Genero::Ficcao, 144);
    $filme2->receberNota(5.0);
    $filme2->receberNota(10.0);
    $filme2->receberNota(8.3);
    $filme2->receberNota(6.7);
    echo $filme2->nome . " recebeu a avaliação média " . $filme2->calcularMedia() . " de 10.\n\n"; 

    $filme3 = new Filme("Star Wars: A Vingança dos Sith", 2005, Genero::Ficcao, 140);
    $filme3->receberNota(10);
    $filme3->receberNota(10);
    $filme3->receberNota(10);
    $filme3->receberNota(10);
    echo $filme3->nome . " recebeu a avaliação média " . $filme3->calcularMedia() . " de 10.\n\n"; 

    $serie1 = new Serie("Obi-Wan Kenobi", 2022, Genero::Acao, 1, 6, 40);
    $serie1->receberNota(3);
    $serie1->receberNota(4.5);
    $serie1->receberNota(7.5);
    $serie1->receberNota(10);
    echo $serie1->nome . " recebeu a avaliação média " . $serie1->calcularMedia() . " de 10.\n\n";

    $calculadora = new CalcMaratona();
    $calculadora->addMaratona($filme1);
    $calculadora->addMaratona($filme2);
    $calculadora->addMaratona($filme3);
    $calculadora->addMaratona($serie1);
    echo "Você vai maratonar por " . $calculadora->maratona() . " minutos\n\n";

    $episodio= new Episodio($serie1, "Parte 1", 1);

    $montarEstrela1 = new MontarEstrela();
    echo "\nO filme Star Wars: A Vingança dos Sith possui " . $montarEstrela1->converter($filme3) . " estrelas\n";
    echo "\nA série Obi-Wan Kenobi possui " . $montarEstrela1->converter($serie1) . " estrelas\n";
