<?php

    //$_POST referência os dados vindos pelo método post (pode possuir índices como $_POST('X')) 
    $filme=[
        "nome" => $_POST['nome'],
        "ano" => $_POST['ano'],
        "nota" => $_POST['nota'],
        "genero" => $_POST['genero']
    ];

    //A pasta public é referenciada por /
    file_put_contents(__DIR__ . '/JSON/filme.json', json_encode($filme));

    /*
        header("location: X"); serve para redirecionar o usuário para um caminho X
        
        Observação: Em um caminho, utiliza-se ? para dizer que parâmetros vem após ele, separados por &
    */
    header('location: /Pages/sucesso.php?filme=' . $filme['nome'] . "&nota=" . $filme['nota']);