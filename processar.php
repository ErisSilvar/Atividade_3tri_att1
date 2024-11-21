<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Requisição</title>
    <style>
        a#linkweb {
            color: black;
            text-decoration: none;
        }

        footer {
            text-align: center;
        }

        a#homelink {
            float: right;
        }

        a#nv {
            float: right;
        }
    </style>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.php'); ?>
    </header>
    <main>
        <h1>Registro de Requisição</h1>
        <?php
        require_once 'class/rb.php';
        include('inc/conexaobd.inc.php');

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {

            $setor = filter_input(INPUT_GET, 'setor', FILTER_SANITIZE_STRING);
            $descricao = filter_input(INPUT_GET, 'descricao', FILTER_SANITIZE_STRING);
            $urgente = isset($_GET['urgente']) ? 1 : 0;

            if (empty($setor) || empty($descricao)) {
                echo '<p>Por favor, preencha todos os campos obrigatórios.</p>';
                exit;
            }

            try {

                $requisicao = R::dispense('requisicoes');
                $requisicao->setor = $setor;
                $requisicao->descricao = $descricao;
                $requisicao->urgente = $urgente;


                $id = R::store($requisicao);

                echo "<p>Requisição cadastrada com sucesso! [ ID = $id ]</p>";
            } catch (Exception $e) {
                echo "<p>Erro ao cadastrar requisição: " . $e->getMessage() . "</p>";
            }
        } else {
            echo '<p>Método inválido. Utilize o formulário para enviar os dados.</p>';
        }

        R::close();
        ?>
        <a href="requisicao.php" id="nv">Nova requisição</a><br>
    </main>
    <footer>
        <?php include('inc/rodape.inc.php'); ?>
    </footer>
</body>

</html>