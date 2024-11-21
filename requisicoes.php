<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisições Registradas</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: auto;
        }

        table,
        th,
        td {
            border: 2px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .urgente {
            text-align: center;
        }


        .check-urgente:disabled {
            filter: invert(100%) sepia(100%) saturate(3000%) hue-rotate(200deg) invert(100%) brightness(100%) contrast(150%);
            cursor: not-allowed;
        }

        footer {
            text-align: center;
        }

        a#nv {
            float: right;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <header>
        <?php include('inc/cabecalho.inc.php'); ?>
    </header>

    <main>
        <h1>Requisições Registradas</h1>

        <?php
        require_once 'class/rb.php';
        include('inc/conexaobd.inc.php');


        $requisicoes = R::findAll('requisicoes');


        if ($requisicoes) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Setor</th><th>Urgente</th><th>Descrição</th></tr>";

            foreach ($requisicoes as $requisicao) {

                $descricao = strtoupper($requisicao->descricao);

                $urgente = $requisicao->urgente ? "<input type='checkbox' class='check-urgente' disabled checked>" : '';


                echo "<tr>";
                echo "<td>" . $requisicao->id . "</td>";
                echo "<td>" . strtoupper($requisicao->setor) . "</td>";
                echo "<td class='urgente'>" . $urgente . "</td>";
                echo "<td>" . $descricao . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Nenhuma requisição registrada.</p>";
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