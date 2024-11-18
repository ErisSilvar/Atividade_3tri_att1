<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>
<body>
    <header>
        <?php
            include 'inc/cabecalho.inc.html';
        ?>
    </header>
    <main>
        <h1>Gestão de Requisições</h1>
        <ul>
            <li><a href="requisicao.php">Nova requisição</a></li>
            <li><a href="requisicoes.php">Listar requisições</a></li>
        </ul>
        
    </main>
    <footer>
        <?php
            include 'inc/rodape.inc.html';
        ?>
    </footer>
    
</body>
</html>