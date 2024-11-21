<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar requisicao</title>
    <style>
        a#linkweb {
            color: black;
            text-decoration: none;
        }

        p {
            text-align: center;
        }

        a#homelink {
            float: right;
        }
    </style>
</head>

<body>
    <header>
        <?php
        include('inc/cabecalho.inc.php');
        ?>
    </header>
    <main>
        <h1>Nova Requisição</h1>

        <form action="processar.php" method="get">
            <fieldset>
                <legend>Dados da requisição</legend>
                <label for="setor">Setor: </label><br>
                <select name="setor" id="setor">
                    <option value="ti">Tecnologia da Informação</option>
                    <option value="rh">Recursos Humanos</option>
                    <option value="al">Almoxarifado</option>
                    <option value="sg">Serviços Gerais</option>
                    <option value="fn">Financias</option>
                </select><br><br>
                <label for="descricao">Descrição: </label><br>
                <input type="text" name="descricao" id="descricao"><br><br>
                <input type="checkbox" id="urgente" name="urgente">
                <label>Urgente</label><br><br>
                <input type="submit" value="Registrar">
            </fieldset>
        </form>


    </main>
    <footer>
        <?php
        include('inc/rodape.inc.php');
        ?>
    </footer>

</body>

</html>