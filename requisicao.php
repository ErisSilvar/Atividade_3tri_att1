<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova requisicao</title>
</head>
<body>
    <header>

    </header>
    <main>
        <h1>Nova Requisição</h1>
        <form action="processar.php" method="get">
            <fieldset>
            <legend>Dados da requisição</legend>
                <label for="setor">Setor: </label><br>
                <input type="text" id="setor" name="setor"><br>
                <label for="descricao">Descrição</label><br>
                <input type="text" id="descricao" name="descricao"><br>
                <input type="checkbox" id="urgente" name="urgente">
                <label>Urgente</label><br>
                <input type="submit" value="Registrar">

            </fieldset>
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>