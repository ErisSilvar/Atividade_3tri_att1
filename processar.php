<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar requisicao</title>
</head>
<body>
    <header>
        <?php
            include 'inc/cabecalho.inc.html';
        ?>
    </header>
    <main>
        <p><a href="index.php">Home</a></p>
        <?php
            if(isset($_GET['setor']) && isset($_GET['descricao']) && isset($_GET['urgente'])){
                $setor = $_GET['setor'];
                $descricao = $_GET['descricao'];
                $urgente = $_GET['urgente'];

                include_once 'class/rb.php';

                R::setup('mysql:host=127.0.0.1;dbname=requisicao;port=3307', 'root', '');

                $dado = R::dispense('dados');
                $dado->setor = $setor;
                $dado->descricao = $descricao;
                $dado->urgente = $urgente;

                R::store($dado);
                
                R::close();

                echo '<p>Requisição registrada com sucesso! [ID = '. $dado->id. ']</p>';




            } else{
                echo '<p>Não foi possível cadastrar.</p>';
            }
        ?>
        <p><a href="requisicao.php">Nova requisição</a></p>
    </main>
    <footer>
        <?php
            include 'inc/rodape.inc.html';
        ?>
    </footer>
    
</body>
</html>