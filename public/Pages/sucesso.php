<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body class="centralizar">
        <h1 class="titulo">

            <!--
                Pode-se utilizar códigos php no html através da chave que abre php (mas desta vez deve ser fechada com 
                ?>)

                Ao passar parâmetros na URL, elas podem ser chamadas através de $_GET['x'] sendo x o parâmetro
            -->
            <?php 
                echo $_GET['filme']; 
            ?>
            cadastrado com sucesso !
            
            <!--
                O conteúdo dentro da estrutura:
                
                <"?"php if(X) : ?>
                    ...
                <"?"php endif; ?>
                
                só será executado se X = true (lembrete: a abertura da tag php precisou de "" em volta do ?, caso 
                contrário seria lido como php e não como comentário)
            -->
            <?php if($_GET['nota'] > 5) : ?>
                <br> (Filme bem avaliado)
            <?php endif; ?>

        </h1>
    </body>
</html>