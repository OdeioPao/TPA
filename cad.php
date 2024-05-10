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
            <div class="h1 my-3"> Cadastro </div>

            <form action="cadbd.php" method="POST">
                <div class="row m-0">
                    <div class="col-6">Nome: <input type="text" name="nome" required> </div>   <div class="col-6">email: <input type="text" name="email" required></div> <br> <br>



                    <div class="col-6">Sexo:   
                        Feminino:<input class=" mx-2 text-end" type="radio" checked name="sexo">
                        Masculino:<input class=" mx-2 text-end" type="radio" name="sexo">
                        Outro:<input class=" mx-2 text-end" type="radio" name="sexo">   
                    </div>                    
                    <div class="col-6">Endereço: <input type="text"required name="endereco"></div> <br> <br>



                    <div class="col-6">Numero: <input type="number" required name="numero"> </div>  <div class="col-6">Complemento: <input type="text" required name="complemento"></div> <br> <br>



                    <div class="col-6">Bairro: <input type="text" required name="bairro"> </div> <div class="col-6"> Cidade: <input type="text" required name="cidade"></div> <br> <br>

                    <div class="col-6">
                        UF:
                        <select name="uf">
                            <option value="MG">MG</option>
                            <option value="SP">SP</option>
                            <option value="SC">SC</option>
                        </select>
                    </div>

                    <div class="col-6">
                        Modalidade:
                        <select name="modalidade">
                            <option value="musculacao">musculação</option>
                            <option value="natacao">natacao</option>
                            <option value="ginastica">ginastica</option>
                        </select>
                    </div>

                </div>
                <button type="submit" class="btn btn-warning mt-5 w-50"> Cadastrar </button>
            </form>
            <a href="index.php" class="btn btn-dark w-50 mt-5"> Voltar </a>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>