<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        <div class="text-center">
            <div class="h1 my-3"> Cadastros existentes </div>

            <div>
            <?php
                require ('conbd.php');

                function listarRegistros($pdo) {
                    $sql = "SELECT * FROM cadastro";
                    $stmt = $pdo->query($sql);
                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                }

                $valores = listarRegistros($pdo);
                ?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>Endereco</th>
                        <th>Numero</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>UF</th>
                        <th>Modalidade</th>
                        
                    </tr>

                <?php
                foreach ($valores as $valor) {
                    ?> 
                    <tr>
                        <td> <?= $valor['id'] ?> </td>
                        <td> <?= $valor['nome'] ?> </td>
                        <td> <?= $valor['email'] ?> </td>
                        <td> <?= $valor['sexo'] ?> </td>
                        <td> <?= $valor['endereco'] ?> </td>
                        <td> <?= $valor['numero'] ?> </td>
                        <td> <?= $valor['complemento'] ?> </td>
                        <td> <?= $valor['bairro'] ?> </td>
                        <td> <?= $valor['cidade'] ?> </td>
                        <td> <?= $valor['uf'] ?> </td>
                        <td> <?= $valor['modalidade'] ?> </td>
                        
                    </tr>
                    <?php 
                }
                echo "</table>";
            ?>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>