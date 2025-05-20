<?php

    /*
        spl_autoload_register é uma função que registra uma função como um autoloader. Isso significa que, se você 
        tentar usar uma classe que ainda não foi definida, o PHP chamará todos os autoloaders registrados na ordem 
        em que foram adicionados, passando o nome da classe indefinida como argumento.
    */
    spl_autoload_register(function(string $nomeClasse){

        /*
            A função str_replace(X, Y, Z) procura as ocorrências da string X dentro de Z e as substitui por Y
        */
        $caminho = str_replace('PHP4', 'src', $nomeClasse) . '.php';

        /*
            Para garantir o funcionamento em sistemas operacionais diferentes do windows, DIRECTORY_SEPARATOR sempre 
            terá o valor de um separador de arquivos, por exemplo \ ou /
        */
        $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
        $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR . $caminho;

        //O comando file_exists(X) verifica se o arquivo X existe e retorna true ou false
        if(file_exists($caminhoCompleto)){

            //O require_once serve para verificar se um caminho ja foi incluído, se já, ele não será incluído novamente
            require_once $caminhoCompleto;

        }
        
    });