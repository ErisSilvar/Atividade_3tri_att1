<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>
<body>
    <main>
        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];

                include_once 'class/rb.php';

                R::setup('mysql:host=127.0.0.1;dbname=requisicao;port=3307', 'root', '');

                $dado = R::load('dados', 'id');
                

                $id = R::store('id');

                echo '<p>'. $dado->id.'</p>';
                
                
                R::close();

            }else{
                echo '<p>Não foi possível executar</p>';
            }

        ?>
    </main>
</body>
</html>